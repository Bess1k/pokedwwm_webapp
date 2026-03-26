<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class BootstrapButton
{
    private string $_strText;
    private string $_strType= "";// Initialise à une chaine vide dans le cas oû outlined -false
    private string $_strLink;

    /**
     * Mont le composant d ebutton Booststrap
     * @param string $text Texte affiché dans le bouton
     * @param string $type Type de bouton: succes, primary
     * @param string $link
     * @param bool ùoutlined
     * 
     */
    public function mount(string $text, string $type, string $link, bool $outlined = false): void
    {
        $this->_strText = $text;
        $this->_strLink = $link;

        if($outlined){
            $this->_strType = 'outlibe-';
        }
        $this->_strType = $type;
    }

    /**
     * Retourne le text affiché dans le  boutton 
     * 
     * @return string
     */
    public function getText(): string
    {
        return $this->_strText;
    }

     /**
     * Retourne la classe Bootstrap
     * 
     * @return string
     */
    public function getType(): string
    {
        return $this->_strType;
    }

     /**
     * Retourne le lien (URL) associé à la balise
     * 
     * @return string
     */
    public function getLink(): string
    {
        return $this->_strLink;
    }
}


    

