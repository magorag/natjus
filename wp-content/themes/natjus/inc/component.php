<?php
function component($component, $state = [], $dir = 'components'){
    
    return function() use ($component, $state, $dir) {
        extract($state);
        require locate_template("$dir/$component.php", false, false);
    };
    
}
