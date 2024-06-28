<?php
if (!function_exists('actif')) {
    function actif($path) {
        // Supposons que cette fonction retourne le chemin correct, personnalisez selon vos besoins
        return asset($path);
    }
}
