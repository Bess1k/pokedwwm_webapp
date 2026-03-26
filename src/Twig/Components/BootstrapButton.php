<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class BootstrapButton
{
    private string $_strText;
    private string $_strType;
    private string $_strLink;

    /**
     * Mont le composant d ebutton Booststrap
     */
    public function mount(string $text, string $type, string $link): void
    {
        $this->_strText = $text;
        $this->_strType = $type;
        $this->_strLink = $link;
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


    

