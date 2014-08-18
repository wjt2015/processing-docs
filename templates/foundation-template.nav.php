<?

$pages = array(

    'Overview'           => array('/overviewf/', 0),

    'Mission'      => array('/mission/', 0), 
    
    'Projects'        => array('/projects/', 0), 
    'People'   => array('/peoplef/', 0),  
    'Fellowships'      => array('/fellowships/', 0),  
    'Reports'       	  => array('/reports/', 0),
    'Patrons'       	  => array('/patrons/', 0),
    'Donate'       	  => array('/donate/', 0),
        
    'Download'        => array('/download/', 0),
    
    'Shop'            => array('/shop/', 0),
    
    'FAQ'             => array('http://wiki.processing.org/w/FAQ', 1),
    
    );


function navigation($section = '')
{  
    global $lang;
    global $translation;
    //$tr = $translation->navigation;  // Removed 22 Sep 2011  --CR

   // $abo = array('About', 'Overview', 'People', 'Foundation');
    //$ref = array('Reference', 'Language', 'A-Z', 'Libraries', 'Tools', 'Environment');
    //$learn = array('Learning', 'Tutorials', 'Basics', 'Topics', '3D', 'Library', 'Books');
    $found = array('Overview', 'Mission', 'Projects', 'People', 'Fellowships', 'Reports', 'Patrons', 'Donate');

    $html = "\t\t\t".'<div id="navigation">'."\n";

    $id = (in_array($section, $ref) || in_array($section, $learn) || 
           in_array($section, $abo)) ? 'mainnav' : 'mainnav_noSub';   
            
    $html .= "\t\t\t\t".'<div class="navBar" id="'.$id.'">'."\n";
    
	    $html .= "\t\t\t\t\t" . l('Overviewf', $section == 'Overviewf') . "<br><br>\n";
	    $html .= "\t\t\t\t\t" . l('Mission', $section == 'Mission') . "<br><br>\n";
	    $html .= "\t\t\t\t\t" . l('Projects', $section == 'Projects') . "<br><br>\n";
	    $html .= "\t\t\t\t\t" . l('Peoplef', $section == 'Peoplef') . "<br>\n";
	    $html .= "\t\t\t\t\t" . l('Fellowships', $section == 'Fellowships') . "<br>\n";
	    $html .= "\t\t\t\t\t" . l('Reports', $section == 'Reports') . "<br>\n";
	    $html .= "\t\t\t\t\t" . l('Patrons', $section == 'Patrons') . "<br><br>\n";

	    $html .= "\t\t\t\t\t" . l('Donate', $section == 'Donate') . "<br>\n";

	    $html .= "\t\t\t\t\t" . l('Shop', $section == 'Shop') . "<br><br>\n";
	       
	    $html .= "\t\t\t\t\t" . "<a href=\"http://forum.processing.org\"" . 'class="outward"' . "><span>&raquo;</span>Forum</a><br> \n";
        $html .= "\t\t\t\t\t" . "<a href=\"https://github.com/processing\"" . 'class="outward"' . "><span>&raquo;</span>GitHub</a><br> \n";
        $html .= "\t\t\t\t\t" . "<a href=\"http://wiki.processing.org/w/Report_Bugs\"" . 'class="outward"' . "><span>&raquo;</span>Issues</a><br> \n";
        $html .= "\t\t\t\t\t" . "<a href=\"http://wiki.processing.org\"" . 'class="outward"' . "><span>&raquo;</span>Wiki</a><br> \n";
        $html .= "\t\t\t\t\t" . "<a href=\"http://wiki.processing.org/w/FAQ\"" . 'class="outward"' . "><span>&raquo;</span>FAQ</a><br> \n";
        $html .= "\t\t\t\t\t" . "<a href=\"https://twitter.com/processingOrg\"" . 'class="outward"' . "><span>&raquo;</span>Twitter</a><br> \n";
        $html .= "\t\t\t\t\t" . "<a href=\"https://www.facebook.com/page.processing\"" . 'class="outward"' . "><span>&raquo;</span>Facebook</a><br> \n";
    
    $html .= "\t\t\t\t</div>\n";

    return $html . "\t\t\t</div>\n";
}

function l($s, $c)
{
    global $pages;
    return "<a href=\"{$pages[$s][0]}\"" . ($c ? ' class="active"' : '') . ">$s</a>";
}

function short_nav($section)
{
    $html  = "\t\t\t".'<div id="navigation">'."\n";
    $html .= "\t\t\t\t".'<div class="navBar" id="mainnav_noSub">'."\n";
    
    $html .= "\t\t\t\t\t<a href=\"http://processing.org/overviewf.html\"" . ($section == 'Cover' ? ' class="active"' : '') . ">Foundation</a> \\ \n";
    $html .= "\t\t\t\t\t<a href=\"/reference/index.html\"" . ($section == 'Language' ? ' class="active"' : '') . ">Language</a> \\ \n";
    $html .= "\t\t\t\t\t<a href=\"/reference/libraries/index.html\"" . ($section == 'Libraries' ? ' class="active"' : '') . ">Libraries</a> \\ \n";
    $html .= "\t\t\t\t\t<a href=\"/reference/tools/index.html\"" . ($section == 'Tools' ? ' class="active"' : '') . ">Tools</a> \\ \n";
    $html .= "\t\t\t\t\t<a href=\"/reference/environment/index.html\"" . ($section == 'Environment' ? ' class="active"' : '') . ">Environment</a>\n";
       
    $html .= "\t\t\t\t</div>\n";
    $html .= "\t\t\t</div>\n";
    
    return $html;
}

function local_nav($section, $rel_path='')
{
    $html  = "\t\t\t".'<div id="navigation">'."\n";
    $html .= "\t\t\t\t".'<div class="navBar" id="mainnav">'."\n";

    $html .= "\t\t\t\t\t<a href=\"{$rel_path}index.html\"" . ($section == 'Language' ? ' class="active"' : '') . ">Language</a><br> \n";
    #$html .= "<a href=\"{$rel_path}alpha.html\"" . ($section == 'A-Z' ? ' class="active"' : '') . ">A-Z</a>)<br> \n";
    $html .= "\t\t\t\t\t<a href=\"{$rel_path}libraries/index.html\"" . ($section == 'Libraries' ? ' class="active"' : '') . ">Libraries</a><br> \n";
    $html .= "\t\t\t\t\t<a href=\"{$rel_path}tools/index.html\"" . ($section == 'Tools' ? ' class="active"' : '') . ">Tools</a><br> \n";
    $html .= "\t\t\t\t\t<a href=\"{$rel_path}environment/index.html\"" . ($section == 'Environment' ? ' class="active"' : '') . ">Environment</a>\n";
    
    $html .= "\t\t\t\t</div>\n";
    $html .= "\t\t\t</div>\n";
    
    return $html;    
}



function language_nav($current)
{
    global $LANGUAGES;
    global $FINISHED;
    if (count($FINISHED) < 2) { return ''; }
    
    $html = "\t".'Language: <select name="nav" size="1" class="refnav" onChange="javascript:gogo(this)">'."\n";
    foreach ($FINISHED as $code) {
        if ($LANGUAGES[$code][3] != '' ) {
            $sel = ($current == $code) ? ' selected="selected"' : '';
            $html .= "\t\t<option value=\"{$LANGUAGES[$code][3]}\"$sel>{$LANGUAGES[$code][0]}</option>\n";
        }
    }
    $html .= "\t</select>\n";
    return $html;
}



function library_nav($current=null)
{
    $html = "\n\t<span class=\"lib-nav\">\n";
    $html .= "\t\t<a href=\"../index.html\">Libraries</a>\n";
    if ($current) {
        $html .= "\t\t \ <a href=\"index.html\">".ucfirst($current)."</a>\n";
    }
    $html .= "\t</span>\n";
    return $html;
}

function examples_nav($current) {
    // $html = "\n\t<div id=\"examples-nav\">\n";
}



?>
