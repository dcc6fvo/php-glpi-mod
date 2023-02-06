 if (isset($_SESSION['glpiactiveprofile'])) {
        if ($_SESSION['glpiactiveprofile']['name'] == 'Home'){
            MudarEntidade::show();
        }
    }
