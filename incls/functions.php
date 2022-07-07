<?php
    function cmdOpts($Options) {
        // Reconstrcut the options from cmd-configs.php so that they can be used inside the Command line options function in php
        $short_opts = "";
        foreach ($Options as $option) 
            $short_opts .= $option[0] . $option[1];

        return $short_opts;
    }
    function getVars($Options, $options) {
        // $Options is the same list defined in cmd-configs
        // $options is the arguments list from cmd
        $Vars = [];
        foreach ($Options as $option) // We go through each option defined in the $Options array
        if (isset($options[$option[0]])) { // If the user set a value for the option in the cmd arguments list, then:
            $Vars[$option[2]] = $options[$option[0]]; 
        }
        return ($Vars);
    }

    
?>