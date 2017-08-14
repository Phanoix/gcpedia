<?php

class GC_IA {
    static public function loadscripts(OutputPage &$out, Skin &$skin ){
        $out->addModules('ext.gc_ia');
    }
    
    public static function audienceField(EditPage &$editPage, OutputPage &$output){
        //$editPage->editFormTextTop.= "<span><h1>TESTING</h1></span>";
        //$editPage->editFormTextAfterWarn  .= '<span>Will this do anything?</span>';
        $community_array = array(
            'atip'=> 'atip',
            'communications'=> 'communications',
            'evaluators'=> 'evaluators',
            'financial'=> 'financial',
            'hr'=> 'hr',
            'im'=> 'im',
            'it'=> 'it',
            'auditors'=> 'auditors',
            'matmanagement'=> 'matmanagement',
            'policy'=> 'policy',
            'procurement'=> 'procurement',
            'realproperty'=> 'realproperty',
            'regulators'=> 'regulators',
            'security'=> 'security',
            'service'=> 'service',
            'science'=> 'science',
            'allps' => 'allps',
        );
        $community_select_options ='';
       foreach($community_array as $k => $v){
           $community_select_options .= '<option value="'.$k.'">'.$v.'</option>';
       }
        /*
        $output->addHTML(
            '<label for="audience">Audience</label>
            <select id="audience" multiple class="audience-select"> '.$community_select_options.'</select>'
        );*/
        $editPage->editFormTextAfterWarn .= '<label for="audience">Audience</label><select id="audience" name="audience" multiple class="audience-select"> '.$community_select_options.'</select>';
    }
    
    public static function addAudienceOnSave(&$wikiPage, &$user, &$content, &$summary, 
$isMinor, $isWatch, $section, &$flags, &$status ){
        
        /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $gc_audience = $_POST["audience"];
        }*/
        //$content->addHTML('<span>'.$audience.'</span>');
        //$content .= $audience;
        
    }
}