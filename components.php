<?php

function inputElement($name, $value)
{
    $ele = "

     <input type=\"text\" name='$name' value='$value' />
    
    ";
    echo $ele;
}

function buttonElement($btnid, $styleclass, $text, $name, $attr)
{
    $btn = "
        <button name='$name' '$attr' class='$styleclass' id='$btnid'>$text</button>
    ";
    echo $btn;
}
