<?php
/** Telugu (తెలుగు)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Arjunaraoc
 * @author Chaduvari
 * @author Jprmvnvijay5
 * @author Kaganer
 * @author Kiranmayee
 * @author Malkum
 * @author Meno25
 * @author Mpradeep
 * @author Praveen Illa
 * @author Ravichandra
 * @author Sunil Mohan
 * @author The Evil IP address
 * @author Urhixidur
 * @author Veeven
 * @author Ævar Arnfjörð Bjarmason <avarab@gmail.com>
 * @author לערי ריינהארט
 * @author రహ్మానుద్దీన్
 * @author రాకేశ్వర
 * @author వైజాసత్య
 */

$namespaceNames = array(
	NS_MEDIA            => 'మీడియా',
	NS_SPECIAL          => 'ప్రత్యేక',
	NS_TALK             => 'చర్చ',
	NS_USER             => 'వాడుకరి',
	NS_USER_TALK        => 'వాడుకరి_చర్చ',
	NS_PROJECT_TALK     => '$1_చర్చ',
	NS_FILE             => 'దస్త్రం',
	NS_FILE_TALK        => 'దస్త్రంపై_చర్చ',
	NS_MEDIAWIKI        => 'మీడియావికీ',
	NS_MEDIAWIKI_TALK   => 'మీడియావికీ_చర్చ',
	NS_TEMPLATE         => 'మూస',
	NS_TEMPLATE_TALK    => 'మూస_చర్చ',
	NS_HELP             => 'సహాయం',
	NS_HELP_TALK        => 'సహాయం_చర్చ',
	NS_CATEGORY         => 'వర్గం',
	NS_CATEGORY_TALK    => 'వర్గం_చర్చ',
);

$namespaceAliases = array(
	'సభ్యులు' => NS_USER,
	'సభ్యులపై_చర్చ' => NS_USER_TALK,
	'సభ్యుడు' => NS_USER, # set for bug 11615
	'సభ్యునిపై_చర్చ' => NS_USER_TALK,
	'బొమ్మ' => NS_FILE,
	'బొమ్మపై_చర్చ' => NS_FILE_TALK,
	'ఫైలు' => NS_FILE,
	'ఫైలుపై_చర్చ' => NS_FILE_TALK,
	'సహాయము' => NS_HELP,
	'సహాయము_చర్చ' => NS_HELP_TALK,
);

$specialPageAliases = array(
	'Allmessages'               => array( 'అన్నిసందేశాలు' ),
	'Allpages'                  => array( 'అన్నిపేజీలు' ),
	'Ancientpages'              => array( 'పురాతనపేజీలు' ),
	'Blankpage'                 => array( 'ఖాళీపేజి' ),
	'Block'                     => array( 'అడ్డగించు', 'ఐపినిఅడ్డగించు', 'వాడుకరినిఅడ్డగించు' ),
	'Booksources'               => array( 'పుస్తకమూలాలు' ),
	'BrokenRedirects'           => array( 'తెగిపోయినదారిమార్పులు' ),
	'Categories'                => array( 'వర్గాలు' ),
	'ChangePassword'            => array( 'సంకేతపదముమార్చు' ),
	'Confirmemail'              => array( 'ఈమెయిలుధ్రువపరచు' ),
	'CreateAccount'             => array( 'ఖాతాసృష్టించు' ),
	'Deadendpages'              => array( 'అగాధపేజీలు' ),
	'DoubleRedirects'           => array( 'రెండుసార్లుదారిమార్పు' ),
	'Emailuser'                 => array( 'వాడుకరికిఈమెయిలుచెయ్యి' ),
	'Export'                    => array( 'ఎగుమతి' ),
	'Fewestrevisions'           => array( 'అతితక్కువకూర్పులు' ),
	'Import'                    => array( 'దిగుమతి' ),
	'Listfiles'                 => array( 'ఫైళ్లజాబితా', 'బొమ్మలజాబితా' ),
	'Listgrouprights'           => array( 'గుంపుహక్కులజాబితా', 'వాడుకరులగుంపుహక్కులు' ),
	'Listusers'                 => array( 'వాడుకరులజాబితా' ),
	'Log'                       => array( 'చిట్టా', 'చిట్టాలు' ),
	'Lonelypages'               => array( 'ఒంటరిపేజీలు', 'అనాధపేజీలు' ),
	'Longpages'                 => array( 'పొడుగుపేజీలు' ),
	'MergeHistory'              => array( 'చరిత్రనువిలీనంచేయి' ),
	'Mostcategories'            => array( 'ఎక్కువవర్గములు' ),
	'Mostrevisions'             => array( 'ఎక్కువకూర్పులు' ),
	'Movepage'                  => array( 'వ్యాసమునుతరలించు' ),
	'Mycontributions'           => array( 'నా_మార్పులు-చేర్పులు' ),
	'Mypage'                    => array( 'నాపేజీ' ),
	'Mytalk'                    => array( 'నాచర్చ' ),
	'Newimages'                 => array( 'కొత్తఫైళ్లు', 'కొత్తబొమ్మలు' ),
	'Newpages'                  => array( 'కొత్తపేజీలు' ),
	'Popularpages'              => array( 'ప్రాచుర్యంపొందినపేజీలు' ),
	'Preferences'               => array( 'అభిరుచులు' ),
	'Protectedpages'            => array( 'సంరక్షితపేజీలు' ),
	'Randompage'                => array( 'యాదృచ్చికపేజీ' ),
	'Randomredirect'            => array( 'యాదుచ్చికదారిమార్పు' ),
	'Recentchanges'             => array( 'ఇటీవలిమార్పులు' ),
	'Recentchangeslinked'       => array( 'చివరిమార్పులలింకులు', 'సంబంధితమార్పులు' ),
	'Revisiondelete'            => array( 'కూర్పుతొలగించు' ),
	'Search'                    => array( 'అన్వేషణ' ),
	'Shortpages'                => array( 'చిన్నపేజీలు' ),
	'Specialpages'              => array( 'ప్రత్యేకపేజీలు' ),
	'Statistics'                => array( 'గణాంకాలు' ),
	'Uncategorizedcategories'   => array( 'వర్గీకరించనివర్గములు' ),
	'Uncategorizedimages'       => array( 'వర్గీకరించనిఫైళ్లు', 'వర్గీకరించనిబొమ్మలు' ),
	'Uncategorizedpages'        => array( 'వర్గీకరించనిపేజీలు' ),
	'Uncategorizedtemplates'    => array( 'వర్గీకరించనిమూసలు' ),
	'Unusedcategories'          => array( 'వాడనివర్గములు' ),
	'Unusedimages'              => array( 'వాడనిఫైళ్లు', 'వాడనిబొమ్మలు' ),
	'Unusedtemplates'           => array( 'వాడనిమూసలు' ),
	'Unwatchedpages'            => array( 'వీక్షించనిపేజీలు' ),
	'Upload'                    => array( 'ఎక్కింపు' ),
	'Userlogin'                 => array( 'వాడుకరిప్రవేశం' ),
	'Userlogout'                => array( 'వాడుకరినిష్క్రమణ' ),
	'Userrights'                => array( 'వాడుకరిహక్కులు' ),
	'Version'                   => array( 'కూర్పు' ),
	'Wantedcategories'          => array( 'కోరినవర్గాలు' ),
	'Wantedfiles'               => array( 'అవసరమైనఫైళ్లు' ),
	'Wantedpages'               => array( 'అవసరమైనపేజీలు', 'విరిగిపోయినలింకులు' ),
	'Wantedtemplates'           => array( 'అవసరమైననమూనాలు' ),
	'Watchlist'                 => array( 'వీక్షణజాబితా' ),
	'Whatlinkshere'             => array( 'ఇక్కడికిలింకున్నపేజీలు' ),
	'Withoutinterwiki'          => array( 'అంతరవికీలేకుండా' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#దారిమార్పు', '#REDIRECT' ),
	'notoc'                     => array( '0', '__విషయసూచికవద్దు__', '__NOTOC__' ),
	'toc'                       => array( '0', '__విషయసూచిక__', '__TOC__' ),
	'pagename'                  => array( '1', 'పేజీపేరు', 'PAGENAME' ),
	'img_right'                 => array( '1', 'కుడి', 'right' ),
	'img_left'                  => array( '1', 'ఎడమ', 'left' ),
	'special'                   => array( '0', 'ప్రత్యేక', 'special' ),
);

$linkTrail = "/^([\xE0\xB0\x81-\xE0\xB1\xAF]+)(.*)$/sDu";

$digitGroupingPattern = "##,##,###";

$messages = array(
# User preference toggles
'tog-underline' => 'లంకె క్రీగీత:',
'tog-hideminor' => 'ఇటీవలి మార్పులలో చిన్న మార్పులను దాచు',
'tog-hidepatrolled' => 'ఇటీవలి మార్పులలో నిఘా ఉన్న మార్పులను దాచు',
'tog-newpageshidepatrolled' => 'కొత్త పేజీల జాబితా నుంచి నిఘా ఉన్న పేజీలను దాచు',
'tog-extendwatchlist' => 'కేవలం ఇటీవలి మార్పులే కాక, మార్పులన్నీ చూపించటానికి నా వీక్షణా జాబితాను పెద్దది చేయి',
'tog-usenewrc' => 'ఇటీవలి మార్పులు మరియు వీక్షణ జాబితాలలో మార్పులను పేజీ వారిగా చూపించు',
'tog-numberheadings' => 'శీర్షికలకు అప్రమేయంగా వరుస సంఖ్యలు చేర్చు',
'tog-showtoolbar' => 'దిద్దుబాటు పనిముట్ల పట్టీని చూపించు',
'tog-editondblclick' => 'డబుల్‌ క్లిక్కు చేసినప్పుడు పేజీని మార్చు',
'tog-editsectiononrightclick' => 'విభాగాల శీర్షికల మీద కుడినొక్కుతో విభాగపు దిద్దుబాటును చేతనంచేయి',
'tog-rememberpassword' => 'ఈ విహారిణిలో నా ప్రవేశాన్ని గుర్తుంచుకో (గరిష్ఠంగా $1 {{PLURAL:$1|రోజు|రోజుల}}కి)',
'tog-watchcreations' => 'నేను సృష్టించే పేజీలను మరియు దస్త్రాలను నా వీక్షణ జాబితాకు చేర్చు',
'tog-watchdefault' => 'నేను మార్చే పేజీలను మరియు దస్త్రాలను నా వీక్షణ జాబితాకు చేర్చు',
'tog-watchmoves' => 'నేను తరలించిన పేజీలను మరియు దస్త్రాలను నా వీక్షణ జాబితాకు చేర్చు',
'tog-watchdeletion' => 'నేను తొలగించిన పేజీలను మరియు దస్త్రాలను నా వీక్షణ జాబితాకు చేర్చు',
'tog-minordefault' => 'ప్రత్యేకంగా తెలుపనంతవరకూ నా మార్పులను చిన్న మార్పులుగా గుర్తించు',
'tog-previewontop' => 'వ్యాసం మార్పుల మునుచూపు సవరించు పెట్టె పైన చూపు',
'tog-previewonfirst' => 'మొదటి  దిద్దుబాటు చేసినపుడు వ్యాసపు మునుచూపు చూపించు',
'tog-enotifwatchlistpages' => 'నా వీక్షణాజాబితా లోని పేజీ లేదా దస్త్రం మారినపుడు నాకు ఈ-మెయిలు పంపు',
'tog-enotifusertalkpages' => 'నా చర్చా పేజీలో మార్పులు జరిగినపుడు నాకు ఈ-మెయిలు పంపు',
'tog-enotifminoredits' => 'పేజీలు మరియు దస్త్రాలకు జరిగే చిన్న మార్పులకు కూడా నాకు ఈ-మెయిలును పంపు',
'tog-enotifrevealaddr' => 'గమనింపు మెయిళ్ళలో నా ఈ-మెయిలు చిరునామాను చూపించు',
'tog-shownumberswatching' => 'వీక్షకుల సంఖ్యను చూపు',
'tog-oldsig' => 'ప్రస్తుత సంతకం:',
'tog-fancysig' => 'సంతకాన్ని వికీపాఠ్యంగా తీసుకో (ఆటోమెటిక్‌ లింకు లేకుండా)',
'tog-uselivepreview' => 'వెనువెంట మునుజూపును వాడు (ప్రయోగాత్మకం)',
'tog-forceeditsummary' => 'దిద్దుబాటు సారాంశం ఖాళీగా ఉంటే ఆ విషయాన్ని నాకు సూచించు',
'tog-watchlisthideown' => 'నా మార్పులను వీక్షణా జాబితాలో చూపించొద్దు',
'tog-watchlisthidebots' => 'బాట్లు చేసిన మార్పులను నా వీక్షణా జాబితాలో చూపించొద్దు',
'tog-watchlisthideminor' => 'చిన్న మార్పులను నా వీక్షణా జాబితాలో చూపించొద్దు',
'tog-watchlisthideliu' => 'ప్రవేశించిన వాడుకరుల మార్పులను వీక్షణా జాబితాలో చూపించకు',
'tog-watchlisthideanons' => 'అజ్ఞాత వాడుకరుల మార్పులను విక్షణా జాబితాలో చూపించకు',
'tog-watchlisthidepatrolled' => 'నిఘా ఉన్న మార్పులను వీక్షణజాబితా నుంచి దాచిపెట్టు',
'tog-ccmeonemails' => 'నేను ఇతర వాడుకరులకు పంపించే ఈ-మెయిళ్ల కాపీలను నాకు కూడా పంపు',
'tog-diffonly' => 'తేడాలను చూపిస్తున్నపుడు, కింద చూపించే పేజీలోని సమాచారాన్ని చూపించొద్దు',
'tog-showhiddencats' => 'దాచిన వర్గాలను చూపించు',
'tog-norollbackdiff' => 'రద్దు చేసాక తేడాలు చూపించవద్దు',
'tog-useeditwarning' => 'ఏదైనా పేజీని నేను వదిలివెళ్తున్నప్పుడు దానిలో భద్రపరచని మార్పులు ఉంటే నన్ను హెచ్చరించు',
'tog-prefershttps' => 'లాగిన్ అయి ఉన్నప్పుడెల్లా భద్ర కనెక్షనునే వాడు',

'underline-always' => 'ఎల్లప్పుడూ',
'underline-never' => 'ఎప్పటికీ వద్దు',
'underline-default' => 'అలంకారపు లేదా విహారిణి అప్రమేయం',

# Font style option in Special:Preferences
'editfont-style' => 'దిద్దుబాటు పెట్టె ఫాంటు శైలి:',
'editfont-default' => 'విహరిణి అప్రమేయం',
'editfont-monospace' => 'మోనోస్పేసుడ్ ఫాంట్',
'editfont-sansserif' => 'సాన్స్-సెరిఫ్ ఫాంటు',
'editfont-serif' => 'సెరిఫ్ ఫాంటు',

# Dates
'sunday' => 'ఆదివారం',
'monday' => 'సోమవారం',
'tuesday' => 'మంగళవారం',
'wednesday' => 'బుధవారం',
'thursday' => 'గురువారం',
'friday' => 'శుక్రవారం',
'saturday' => 'శనివారం',
'sun' => 'ఆది',
'mon' => 'సోమ',
'tue' => 'మంగళ',
'wed' => 'బుధ',
'thu' => 'గురు',
'fri' => 'శుక్ర',
'sat' => 'శని',
'january' => 'జనవరి',
'february' => 'ఫిబ్రవరి',
'march' => 'మార్చి',
'april' => 'ఏప్రిల్',
'may_long' => 'మే',
'june' => 'జూన్',
'july' => 'జూలై',
'august' => 'ఆగష్టు',
'september' => 'సెప్టెంబరు',
'october' => 'అక్టోబరు',
'november' => 'నవంబరు',
'december' => 'డిసెంబరు',
'january-gen' => 'జనవరి',
'february-gen' => 'ఫిబ్రవరి',
'march-gen' => 'మార్చి',
'april-gen' => 'ఏప్రిల్',
'may-gen' => 'మే',
'june-gen' => 'జూన్',
'july-gen' => 'జూలై',
'august-gen' => 'ఆగష్టు',
'september-gen' => 'సెప్టెంబరు',
'october-gen' => 'అక్టోబరు',
'november-gen' => 'నవంబరు',
'december-gen' => 'డిసెంబరు',
'jan' => 'జన',
'feb' => 'ఫిబ్ర',
'mar' => 'మార్చి',
'apr' => 'ఏప్రి',
'may' => 'మే',
'jun' => 'జూన్',
'jul' => 'జూలై',
'aug' => 'ఆగ',
'sep' => 'సెప్టెం',
'oct' => 'అక్టో',
'nov' => 'నవం',
'dec' => 'డిసెం',
'january-date' => 'జనవరి $1',
'february-date' => 'ఫిబ్రవరి $1',
'march-date' => 'మార్చి $1',
'april-date' => 'ఏప్రిల్ $1',
'may-date' => 'మే $1',
'june-date' => 'జూన్ $1',
'july-date' => 'జూలై $1',
'august-date' => 'ఆగస్టు $1',
'september-date' => 'సెప్టెంబర్ $1',
'october-date' => 'అక్టోబర్ $1',
'november-date' => 'నవంబర్ $1',
'december-date' => 'డిసెంబర్ $1',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|వర్గం|వర్గాలు}}',
'category_header' => '"$1" వర్గంలోని పుటలు',
'subcategories' => 'ఉపవర్గాలు',
'category-media-header' => '"$1" వర్గంలో ఉన్న మీడియా ఫైళ్లు',
'category-empty' => "''ప్రస్తుతం ఈ వర్గంలో ఎలాంటి పేజీలుగానీ మీడియా ఫైళ్లుగానీ లేవు.''",
'hidden-categories' => '{{PLURAL:$1|దాచిన వర్గం|దాచిన వర్గాలు}}',
'hidden-category-category' => 'దాచిన వర్గాలు',
'category-subcat-count' => '{{PLURAL:$2|ఈ వర్గంలో క్రింద చూపిస్తున్న ఒకే ఉపవర్గం ఉంది.|ఈ వర్గంలో ఉన్న మొత్తం $2 వర్గాలలో ప్రస్తుతం {{PLURAL:$1|ఒక ఉపవర్గాన్ని|$1 ఉపవర్గాలను}} చూపిస్తున్నాము.}}',
'category-subcat-count-limited' => 'ఈ వర్గం క్రింద చూపిస్తున్న {{PLURAL:$1|ఒక ఉపవర్గం ఉంది|$1 ఉపవర్గాలు ఉన్నాయి}}.',
'category-article-count' => '{{PLURAL:$2|ఈ వర్గంలో క్రింద చూపిస్తున్న ఒకే పేజీ ఉంది.|ఈ వర్గంలో ఉన్న మొత్తం $2 పేజీలలో ప్రస్తుతం {{PLURAL:$1|ఒక పేజీని|$1 పేజీలను}} చూపిస్తున్నాము.}}',
'category-article-count-limited' => 'ఈ వర్గం క్రింద చూపిస్తున్న {{PLURAL:$1|ఒక పేజీ ఉంది|$1 పేజీలు ఉన్నాయి}}.',
'category-file-count' => '{{PLURAL:$2|ఈ వర్గంలో క్రింద చూపిస్తున్న ఒకే ఫైలు ఉంది.|ఈ వర్గంలో ఉన్న మొత్తం $2 పేజీలలో ప్రస్తుతం {{PLURAL:$1|ఒక ఫైలును|$1 ఫైళ్లను}} చూపిస్తున్నాము.}}',
'category-file-count-limited' => 'ఈ వర్గం క్రింద చూపిస్తున్న {{PLURAL:$1|ఒక ఫైలు ఉంది|$1 ఫైళ్లు ఉన్నాయి}}.',
'listingcontinuesabbrev' => '(కొనసాగింపు)',
'index-category' => 'సూచీకరించిన పేజీలు',
'noindex-category' => 'సూచీకరించని పేజీలు',
'broken-file-category' => 'తెగిపోయిన ఫైలులింకులు గల పేజీలు',

'about' => 'గురించి',
'article' => 'విషయపు పేజీ',
'newwindow' => '(కొత్త కిటికీలో వస్తుంది)',
'cancel' => 'రద్దు',
'moredotdotdot' => 'ఇంకా...',
'morenotlisted' => 'ఈ జాబితా సంపూర్ణం కాదు.',
'mypage' => 'పుట',
'mytalk' => 'చర్చ',
'anontalk' => 'ఈ ఐ.పి.కి సంబంధించిన చర్చ',
'navigation' => 'మార్గదర్శకం',
'and' => '&#32;మరియు',

# Cologne Blue skin
'qbfind' => 'వెతుకు',
'qbbrowse' => 'విహరించు',
'qbedit' => 'సవరించు',
'qbpageoptions' => 'ఈ పేజీ',
'qbmyoptions' => 'నా పేజీలు',
'faq' => 'తరచూ అడిగే ప్రశ్నలు',
'faqpage' => 'Project:తరచూ అడిగే ప్రశ్నలు',

# Vector skin
'vector-action-addsection' => 'విషయాన్ని చేర్చు',
'vector-action-delete' => 'తొలగించు',
'vector-action-move' => 'తరలించు',
'vector-action-protect' => 'సంరక్షించు',
'vector-action-undelete' => 'తిరిగి చేర్చు',
'vector-action-unprotect' => 'సంరక్షణను మార్చు',
'vector-simplesearch-preference' => 'సరళమైన వెతుకుడు పట్టీని చేతనంచేయి (వెక్టర్ అలంకారానికి మాత్రమే)',
'vector-view-create' => 'సృష్టించు',
'vector-view-edit' => 'సవరించు',
'vector-view-history' => 'చరిత్రను చూడండి',
'vector-view-view' => 'చదువు',
'vector-view-viewsource' => 'మూలాన్ని చూడండి',
'actions' => 'పనులు',
'namespaces' => 'పేరుబరులు',
'variants' => 'రకరకాలు',

'navigation-heading' => 'మార్గదర్శకపు మెనూ',
'errorpagetitle' => 'పొరపాటు',
'returnto' => 'తిరిగి $1కి.',
'tagline' => '{{SITENAME}} నుండి',
'help' => 'సహాయం',
'search' => 'వెతుకు',
'searchbutton' => 'వెతుకు',
'go' => 'వెళ్లు',
'searcharticle' => 'వెళ్లు',
'history' => 'పేజీ చరిత్ర',
'history_short' => 'చరిత్ర',
'updatedmarker' => 'నేను కిందటిసారి వచ్చిన తరువాత జరిగిన మార్పులు',
'printableversion' => 'అచ్చుతీయదగ్గ కూర్పు',
'permalink' => 'శాశ్వత లంకె',
'print' => 'ముద్రించు',
'view' => 'చూచుట',
'edit' => 'సవరించు',
'create' => 'సృష్టించు',
'editthispage' => 'ఈ పేజీని సవరించండి',
'create-this-page' => 'ఈ పేజీని సృష్టించండి',
'delete' => 'తొలగించు',
'deletethispage' => 'ఈ పేజీని తొలగించండి',
'undeletethispage' => 'ఈ పేజీ తొలగింపును ఆపు',
'undelete_short' => '{{PLURAL:$1|ఒక్క రచనను|$1 రచనలను}} పునఃస్థాపించు',
'viewdeleted_short' => '{{PLURAL:$1|తొలగించిన ఒక మార్పు|$1 తొలగించిన మార్పుల}}ను చూడండి',
'protect' => 'సంరక్షించు',
'protect_change' => 'మార్చు',
'protectthispage' => 'ఈ పేజీని సంరక్షించు',
'unprotect' => 'సంరక్షణ మార్పు',
'unprotectthispage' => 'ఈ పుట సంరక్షణను మార్చండి',
'newpage' => 'కొత్త పేజీ',
'talkpage' => 'ఈ పేజీని చర్చించండి',
'talkpagelinktext' => 'చర్చ',
'specialpage' => 'ప్రత్యేక పేజీ',
'personaltools' => 'వ్యక్తిగత పనిముట్లు',
'postcomment' => 'కొత్త విభాగం',
'articlepage' => 'విషయపు పేజీని చూడండి',
'talk' => 'చర్చ',
'views' => 'చూపులు',
'toolbox' => 'పనిముట్లు',
'userpage' => 'వాడుకరి పేజీని చూడండి',
'projectpage' => 'ప్రాజెక్టు పేజీని చూడు',
'imagepage' => 'ఫైలు పేజీని చూడండి',
'mediawikipage' => 'సందేశం పేజీని చూడు',
'templatepage' => 'మూస పేజీని చూడు',
'viewhelppage' => 'సహాయం పేజీని చూడు',
'categorypage' => 'వర్గం పేజీని చూడు',
'viewtalkpage' => 'చర్చను చూడు',
'otherlanguages' => 'ఇతర భాషలలో',
'redirectedfrom' => '($1 నుండి మళ్ళించబడింది)',
'redirectpagesub' => 'దారిమార్పు పుట',
'lastmodifiedat' => 'ఈ పేజీకి $2, $1న చివరి మార్పు జరిగినది.',
'viewcount' => 'ఈ పేజీ {{PLURAL:$1|ఒక్క సారి|$1 సార్లు}} దర్శించబడింది.',
'protectedpage' => 'సంరక్షణలోని పేజీ',
'jumpto' => 'ఇక్కడికి గెంతు:',
'jumptonavigation' => 'పేజీకి సంబంధించిన లింకులు',
'jumptosearch' => 'వెతుకు',
'view-pool-error' => 'క్షమించండి, ప్రస్తుతం సర్వర్లన్నీ ఓవర్‌లోడ్ అయిఉన్నాయి.
చాలామంది వాడుకరులు ఈ పేజీని చూస్తున్నారు.
ఈ పేజీని వీక్షించడానికి కొద్దిసేపు నిరీక్షించండి.

$1',
'pool-timeout' => 'తాళం కొరకు వేచివుండడానికి కాలపరిమితి అయిపోయింది',
'pool-queuefull' => 'సమూహపు వరుస నిండుగా ఉంది',
'pool-errorunknown' => 'గుర్తుతెలియని పొరపాటు',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage).
'aboutsite' => '{{SITENAME}} గురించి',
'aboutpage' => 'Project:గురించి',
'copyright' => 'విషయం $1 కి లోబడి లభ్యం, వేరుగా పేర్కొంటే తప్ప.',
'copyrightpage' => '{{ns:project}}:ప్రచురణ హక్కులు',
'currentevents' => 'ఇప్పటి ముచ్చట్లు',
'currentevents-url' => 'Project:ఇప్పటి ముచ్చట్లు',
'disclaimers' => 'అస్వీకారములు',
'disclaimerpage' => 'Project:సాధారణ నిష్పూచీ',
'edithelp' => 'దిద్దుబాటు సహాయం',
'helppage' => 'Help:సూచిక',
'mainpage' => 'మొదటి పేజీ',
'mainpage-description' => 'తలపుట',
'policy-url' => 'Project:విధానం',
'portal' => 'సముదాయ పందిరి',
'portal-url' => 'Project:సముదాయ పందిరి',
'privacy' => 'గోప్యతా విధానం',
'privacypage' => 'Project:గోప్యతా విధానం',

'badaccess' => 'అనుమతి లోపం',
'badaccess-group0' => 'మీరు చేయతలపెట్టిన పనికి మీకు హక్కులు లేవు.',
'badaccess-groups' => 'మీరు చేయతలపెట్టిన పని ఈ {{PLURAL:$2|గుంపు|గుంపుల}} లోని వాడుకర్లకు మాత్రమే పరిమితం: $1.',

'versionrequired' => 'మీడియావికీ సాఫ్టువేరు వెర్షను $1 కావాలి',
'versionrequiredtext' => 'ఈ పేజీని వాడటానికి మీకు మీడియావికీ సాఫ్టువేరు వెర్షను $1 కావాలి. [[Special:Version|వెర్షను పేజీ]]ని చూడండి.',

'ok' => 'సరే',
'retrievedfrom' => '"$1" నుండి వెలికితీశారు',
'youhavenewmessages' => 'మీకు $1 ఉన్నాయి ($2).',
'youhavenewmessagesfromusers' => 'మీకు {{PLURAL:$3|మరో వాడుకరి|$3 వాడుకరుల}} నుండి $1 ($2).',
'youhavenewmessagesmanyusers' => 'మీకు చాలా వాడుకరుల నుండి $1 ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|ఒక కొత్త సందేశం వచ్చింది|999=కొత్త సందేశాలు ఉన్నాయి}}',
'newmessagesdifflinkplural' => 'చివరి {{PLURAL:$1|మార్పు|999=మార్పులు}}',
'youhavenewmessagesmulti' => '$1లో మీకో సందేశం ఉంది',
'editsection' => 'మార్చు',
'editold' => 'సవరించు',
'viewsourceold' => 'మూలాన్ని చూడండి',
'editlink' => 'సవరించు',
'viewsourcelink' => 'మూలాన్ని చూడండి',
'editsectionhint' => 'విభాగాన్ని మార్చు: $1',
'toc' => 'విషయ సూచిక',
'showtoc' => 'చూపించు',
'hidetoc' => 'దాచు',
'collapsible-collapse' => 'కుదించు',
'collapsible-expand' => 'విస్తరించు',
'thisisdeleted' => '$1ను చూస్తారా, పునఃస్థాపిస్తారా?',
'viewdeleted' => '$1 చూస్తారా?',
'restorelink' => '{{PLURAL:$1|ఒక తొలగించిన మార్పు|$1 తొలగించిన మార్పులు}}',
'feedlinks' => 'ఫీడు:',
'feed-invalid' => 'మీరు కోరిన ఫీడు సరైన రకం కాదు.',
'feed-unavailable' => 'సిండికేషన్ ఫీడులేమీ అందుబాటులో లేవు.',
'site-rss-feed' => '$1 RSS ఫీడు',
'site-atom-feed' => '$1 ఆటమ్ ఫీడు',
'page-rss-feed' => '"$1" ఆరెసెస్సు(RSS) ఫీడు',
'page-atom-feed' => '"$1" ఆటమ్ ఫీడు',
'feed-atom' => 'యాటమ్',
'red-link-title' => '$1 (పుట లేదు)',
'sort-descending' => 'అవరోహణ క్రమంలో అమర్చు',
'sort-ascending' => 'ఆరోహణ క్రమంలో అమర్చు',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'పేజీ',
'nstab-user' => 'వాడుకరి పేజీ',
'nstab-media' => 'మీడియా పేజీ',
'nstab-special' => 'ప్రత్యేక పేజీ',
'nstab-project' => 'ప్రాజెక్టు పేజీ',
'nstab-image' => 'దస్త్రం',
'nstab-mediawiki' => 'సందేశం',
'nstab-template' => 'మూస',
'nstab-help' => 'సహాయము',
'nstab-category' => 'వర్గం',

# Main script and global functions
'nosuchaction' => 'అటువంటి కార్యం లేదు',
'nosuchactiontext' => 'మీరు URLలో పేర్కొన్న కార్యం సరైనది కాదు.
మీరు URLని తప్పుగా టైపు చేసివుండవచ్చు లేదా తప్పుడు లింకుని అనుసరించివుండొచ్చు.
{{SITENAME}} ఉపయోగించే మృదుపరికరంలో దోషమైనా అయివుండవచ్చు.',
'nosuchspecialpage' => 'అటువంటి ప్రత్యేక పేజీ లేదు',
'nospecialpagetext' => '<strong>మీరు అడిగిన ప్రత్యేకపేజీ సరైనది కాదు.</strong>

సరైన ప్రత్యేకపేజీల జాబితా [[Special:SpecialPages|{{int:specialpages}}]] వద్ద ఉంది.',

# General errors
'error' => 'లోపం',
'databaseerror' => 'డేటాబేసు లోపం',
'databaseerror-text' => 'డేటాబేసు క్వెరీ లోపం దొర్లింది.
సాఫ్టువేరులోని ఉన్న దోషానికి ఇది సూచిక కావచ్చు.',
'databaseerror-textcl' => 'డేటాబేసు క్వెరీ లోపం దొర్లింది.',
'databaseerror-query' => 'క్వెరీ: $1',
'databaseerror-function' => 'ఫంక్షన్: $1',
'databaseerror-error' => 'లోపం: $1',
'laggedslavemode' => 'హెచ్చరిక: పేజీలో ఇటీవల జరిగిన మార్పులు ఉండకపోవచ్చు.',
'readonly' => 'డేటాబేసు లాక్‌చెయ్యబడింది',
'enterlockreason' => 'డేటాబేసుకు వేయబోతున్న లాకుకు కారణం తెలుపండి, దానితోపాటే ఎంతసమయం తరువాత ఆ లాకు తీసేస్తారో కూడా తెలుపండి',
'readonlytext' => 'డేటాబేసు ప్రస్తుతం లాకు చేయబడింది. మార్పులు, చేర్పులు ప్రస్తుతం చెయ్యలేరు. మామూలుగా జరిగే నిర్వహణ కొరకు ఇది జరిగి ఉండవచ్చు; అది పూర్తి కాగానే తిరిగి మామూలుగా పనిచేస్తుంది.

దీనిని లాకు చేసిన నిర్వాహకుడు ఇలా తెలియజేస్తున్నాడు: $1',
'missing-article' => '"$1" $2 అనే పేజీ పాఠ్యం డేటాబేసులో దొరకలేదు.

కాలదోషం పట్టిన తేడా కోసం చూసినపుడుగానీ, తొలగించిన పేజీ చరితం కోసం చూసినపుడుగానీ ఇది సాధారణంగా జరుగుతుంది.

ఒకవేళ అలా కాకపోతే, మీరో బగ్‌ను కనుక్కున్నట్టే.
ఈ URLను సూచిస్తూ, దీన్ని ఓ [[Special:ListUsers/sysop|నిర్వాహకునికి]] తెలియజెయ్యండి.',
'missingarticle-rev' => '(కూర్పు#: $1)',
'missingarticle-diff' => '(తేడా: $1, $2)',
'readonly_lag' => 'అనుచర (స్లేవ్) డేటాబేసు సర్వర్లు, ప్రధాన (మాస్టరు) సర్వరును అందుకునేందుకుగాను, డేటాబేసు ఆటోమాటిక్‌గా లాకు అయింది.',
'internalerror' => 'అంతర్గత లోపం',
'internalerror_info' => 'అంతర్గత లోపం: $1',
'fileappenderrorread' => 'చేరుస్తున్నప్పుడు "$1"ని చదవలేకపోయాం.',
'fileappenderror' => '"$1" ని "$2" తో కూర్చలేకపోతున్నాం',
'filecopyerror' => 'ఫైలు "$1"ని "$2"కు కాపీ చెయ్యటం కుదరలేదు.',
'filerenameerror' => 'ఫైలు "$1" పేరును "$2"గా మార్చటం కుదరలేదు.',
'filedeleteerror' => 'ఫైలు "$1"ని తీసివేయటం కుదరలేదు.',
'directorycreateerror' => '"$1" అనే డైరెక్టరీని సృష్టించలేక పోతున్నాను.',
'filenotfound' => 'ఫైలు "$1" కనబడలేదు.',
'fileexistserror' => '"$1" అనే ఫైలు ఉంది, కాని అందులోకి రాయలేకపోతున్నాను',
'unexpected' => 'అనుకోని విలువ: "$1"="$2".',
'formerror' => 'లోపం: ఈ ఫారాన్ని పంపించలేకపోతున్నాను',
'badarticleerror' => 'ఈ పేజీపై ఈ పని చేయడం కుదరదు.',
'cannotdelete' => '"$1" అనే పేజీ లేదా ఫైలుని తొలగించలేకపోయాం.
దాన్ని ఇప్పటికే ఎవరైనా తొలగించి ఉండవచ్చు.',
'cannotdelete-title' => '"$1" పుటను తొలగించలేరు',
'delete-hook-aborted' => 'తొలగింపును హుక్ ఆపేసింది.
వివరణ ఏమీ ఇవ్వలేదు.',
'no-null-revision' => '"$1" పేజీకి కొత్త శూన్య కూర్పు (నల్ రివిజన్) ను సృష్టించలేకపోయాం',
'badtitle' => 'తప్పు శీర్షిక',
'badtitletext' => 'మీరు కోరిన పుట యొక్క పేరు చెల్లనిది, ఖాళీగా ఉంది, లేదా తప్పుగా ఇచ్చిన అంతర్వికీ లేదా అంతర-భాషా శీర్షిక అయివుండాలి.
శీర్షికలలో ఉపయోగించకూడని అక్షరాలు దానిలో ఉండివుండొచ్చు.',
'perfcached' => 'కింది డేటా ముందే సేకరించి పెట్టుకున్నది. కాబట్టి తాజా డేటాతో పోలిస్తే తేడాలుండవచ్చు. ఈ కాషెలో గరిష్టంగా {{PLURAL:$1|ఒక్క ఫలితం ఉంది|$1 ఫలితాలు ఉన్నాయి}}.',
'perfcachedts' => 'కింది సమాచారం ముందే సేకరించి పెట్టుకున్నది. దీన్ని $1న చివరిసారిగా తాజాకరించారు. ఈ కాషెలో గరిష్టంగా {{PLURAL:$4|ఒక్క ఫలితం ఉంది|$4 ఫలితాలు ఉన్నాయి}}.',
'querypage-no-updates' => 'ప్రస్తుతం ఈ పుటకి తాజాకరణలని అచేతనం చేసారు.
ఇక్కడున్న భోగట్టా కూడా తాజాకరించబడదు.',
'viewsource' => 'మూలాన్ని చూపించు',
'viewsource-title' => '$1 యొక్క సోర్సు చూడండి',
'actionthrottled' => 'కార్యాన్ని ఆపేసారు',
'actionthrottledtext' => 'స్పామును తగ్గించటానికి తీసుకున్న నిర్ణయాల వల్ల, మీరు ఈ కార్యాన్ని అతి తక్కువ సమయంలో బోలెడన్ని సార్లు చేయకుండా అడ్డుకుంటున్నాము. కొన్ని నిమిషాలు ఆగి మరలా ప్రయత్నించండి.',
'protectedpagetext' => 'ఈ పేజీలో మార్పులు వగైరాలు చెయ్యకుండా ఉండేందుకు గాను, సంరక్షించబడింది.',
'viewsourcetext' => 'మీరీ పేజీ సోర్సును చూడవచ్చు, కాపీ చేసుకోవచ్చు:',
'viewyourtext' => "ఈ పేజీకి '''మీ మార్పుల''' యొక్క మూలాన్ని చూడవచ్చు లేదా కాపీచేసుకోవచ్చు:",
'protectedinterface' => 'ఈ పేజీ, ఈ వికీ యొక్క సాఫ్టువేరు ఇంటరుఫేసుకు చెందిన టెక్స్టును అందిస్తుంది. దుశ్చర్యల నివారణ కోసమై దీన్ని సంరక్షించాం. వికీలన్నిటిలోను అనువాదాలను చేర్చాలన్నా, మార్చాలన్నా మీడియావికీ స్థానికీకరణ ప్రాజెక్టైన [//translatewiki.net/ translatewiki.net] ను వాడండి.',
'editinginterface' => '<strong>హెచ్చరిక:</strong> సాఫ్టువేరుకు ఇంటరుఫేసు టెక్స్టును అందించేందుకు పనికొచ్చే పేజీని మీరు సరిదిద్దుతున్నారు.
ఈ పేజీలో చేసే మార్పుల వల్ల ఇతర వాడుకరులకు ఇంటరుఫేసు కనబడే విధానంలో తేడావస్తుంది.
వికీలన్నిటిలోను అనువాదాలను చేర్చాలన్నా, మార్చాలన్నా మీడియావికీ స్థానికీకరణ ప్రాజెక్టైన [//translatewiki.net/ translatewiki.net] ను వాడండి.',
'cascadeprotected' => 'కింది {{PLURAL:$1|పేజీని|పేజీలను}} కాస్కేడింగు ఆప్షనుతో చేసి సంరక్షించారు. ప్రస్తుత పేజీ, ఈ పేజీల్లో ఇంక్లూడు అయి ఉంది కాబట్టి, దిద్దుబాటు చేసే వీలు లేకుండా ఇది కూడా రక్షణలో ఉంది.
$2',
'namespaceprotected' => "'''$1''' నేంస్పేసులో మార్పులు చేయటానికి మీకు అనుమతి లేదు.",
'customcssprotected' => 'ఈ CSS పేజీని మార్చేందుకు మీకు అనుమతి లేదు. ఎందుకంటే వేరే వాడుకరి యొక్క వ్యక్తిగత సెట్టింగులు అందులో ఉన్నాయి.',
'customjsprotected' => 'ఈ JavaScript పేజీని మార్చేందుకు మీకు అనుమతి లేదు. ఎందుకంటే వేరే వాడుకరి యొక్క వ్యక్తిగత సెట్టింగులు అందులో ఉన్నాయి.',
'mycustomcssprotected' => 'ఈ CSS పేజీని సవరించేందుకు మీకు అనుమతి లేదు.',
'mycustomjsprotected' => 'ఈ జావాస్క్రిప్టు పేజీని సవరించేందుకు మీకు అనుమతి లేదు.',
'myprivateinfoprotected' => 'మీ అంతరంగిక సమాచారాన్ని సవరించేందుకు మీకు అనుమతి లేదు.',
'mypreferencesprotected' => 'మీ అభీష్టాలను సవరించేందుకు మీకు అనుమతి లేదు.',
'ns-specialprotected' => 'ప్రత్యేక పేజీలపై దిద్దుబాట్లు చేయలేరు.',
'titleprotected' => "సభ్యులు [[User:$1|$1]] ఈ పేజీని సృష్టించనివ్వకుండా నిరోదిస్తున్నారు.
అందుకు ఇచ్చిన కారణం: ''$2''.",
'filereadonlyerror' => 'ఫైలు ఖజానా "$2" రీడ్-ఓన్లీ స్థితిలో ఉండటం చేత "$1" ఫైలులో మార్పులు చెయ్యలేకపోయాం.

దానికి తాళం వేసిన అధికారి ఇచ్చిన వివరణ ఇది: "$3".',
'invalidtitle-knownnamespace' => 'పేరుబరి "$2", పాఠ్యము "$3" తో కూడిన ఈ శీర్షిక చెల్లనిది',
'invalidtitle-unknownnamespace' => 'అపరిచితమైన పేరుబరి సంఖ్య "$1", పాఠ్యము "$2" తో కూడిన ఈ శీర్షిక చెల్లనిది',
'exception-nologin' => 'లోనికి ప్రవేశించిలేరు',
'exception-nologin-text' => 'ఈ పేజీని చూడడానికి లేదా ఈ చర్యను చెయ్యడానికి దయచేసి [[Special:Userlogin|ప్రవేశించండి]].',
'exception-nologin-text-manual' => 'ఈ పేజీ చూసేందుకు లేదా ఈ పని చేసేందుకు $1.',

# Virus scanner
'virus-badscanner' => "తప్పుడు స్వరూపణం: తెలియని వైరస్ స్కానర్: ''$1''",
'virus-scanfailed' => 'స్కాన్ విఫలమైంది (సంకేతం $1)',
'virus-unknownscanner' => 'అజ్ఞాత యాంటీవైరస్:',

# Login and logout pages
'logouttext' => '<strong>ఇప్పుడు మీరు లాగౌటయ్యారు.</strong>

అయితే, ఓ గమనిక.. మీ విహారిణిలోని కోశాన్ని ఖాళీ చేసేవరకూ కొన్ని పేజీలు మీరింకా లాగినై ఉన్నట్లుగానే చూపించవచ్చు.',
'welcomeuser' => 'స్వాగతం, $1!',
'welcomecreation-msg' => 'మీ ఖాతాని సృష్టించాం.
మీ [[Special:Preferences|{{SITENAME}} అభిరుచులను]] మార్చుకోవడం మరువకండి.
తెలుగు వికీపీడియాలో తెలుగులోనే రాయాలి. వికీలో రచనలు చేసే ముందు, కింది సూచనలను గమనించండి.
తెలుగు {{SITENAME}}లో తెలుగులోనే రాయాలి. వికీలో రచనలు చేసే ముందు, కింది సూచనలను గమనించండి.
*వికీని త్వరగా అర్థం చేసుకునేందుకు [[వికీపీడియా:5 నిమిషాల్లో వికీ|5 నిమిషాల్లో వికీ]] పేజీని చూడండి.
*తెలుగులో రాసేందుకు ఇంగ్లీషు అక్షరాల ఉచ్ఛారణతో తెలుగు టైపు చేసే [[వికీపీడియా:టైపింగు సహాయం| టైపింగ్  సహాయం]] వాడవచ్చు. మరిన్ని ఉపకరణాల కొరకు [[కీ బోర్డు]] మరియు   తెరపై తెలుగు సరిగా లేకపోతే[[వికీపీడియా:Setting up your browser for Indic scripts|ఈ పేజీ]]  చూడండి.',
'yourname' => 'వాడుకరి పేరు:',
'userlogin-yourname' => 'వాడుకరి పేరు',
'userlogin-yourname-ph' => 'మీ వాడుకరి పేరును ఇవ్వండి',
'createacct-another-username-ph' => 'మీ వాడుకరి పేరును ప్రవేశపెట్టండి',
'yourpassword' => 'సంకేతపదం:',
'userlogin-yourpassword' => 'సంకేతపదం',
'userlogin-yourpassword-ph' => 'మీ సంకేతపదాన్ని ఇవ్వండి',
'createacct-yourpassword-ph' => 'సంకేతపదాన్ని ఇవ్వండి',
'yourpasswordagain' => 'సంకేతపదాన్ని మళ్ళీ ఇవ్వండి:',
'createacct-yourpasswordagain' => 'సంకేతపదాన్ని నిర్ధారించండి',
'createacct-yourpasswordagain-ph' => 'సంకేతపదాన్ని మళ్ళీ ఇవ్వండి',
'remembermypassword' => 'ఈ కంప్యూటరులో నా ప్రవేశాన్ని గుర్తుంచుకో (గరిష్ఠంగా $1 {{PLURAL:$1|రోజు|రోజుల}}కి)',
'userlogin-remembermypassword' => 'నన్ను ప్రవేశింపజేసి ఉంచు',
'userlogin-signwithsecure' => 'సురక్షిత కనెక్షను వాడు',
'yourdomainname' => 'మీ డోమైను',
'password-change-forbidden' => 'ఈ వికీలో మీరు సంకేతపదాలను మార్చలేరు.',
'externaldberror' => 'డేటాబేసు అధీకరణలో పొరపాటు జరిగింది లేదా మీ బయటి ఖాతాని తాజాకరించడానికి మీకు అనుమతి లేదు.',
'login' => 'లోనికి రండి',
'nav-login-createaccount' => 'లోనికి ప్రవేశించండి / ఖాతాని సృష్టించుకోండి',
'loginprompt' => '{{SITENAME}}లోకి ప్రవేశించాలంటే మీ విహారిణిలో కూకీలు చేతనమై ఉండాలి.',
'userlogin' => 'ప్రవేశించండి / ఖాతాను సృష్టించుకోండి',
'userloginnocreate' => 'ప్రవేశించండి',
'logout' => 'నిష్క్రమించు',
'userlogout' => 'నిష్క్రమించు',
'notloggedin' => 'లోనికి ప్రవేశించి లేరు',
'userlogin-noaccount' => 'మీకు ఖాతా లేదా?',
'userlogin-joinproject' => '{{SITENAME}}లో చేరండి',
'nologin' => 'ఖాతా లేదా? $1.',
'nologinlink' => 'ఖాతాని సృష్టించుకోండి',
'createaccount' => 'ఖాతాని సృష్టించు',
'gotaccount' => 'ఇప్పటికే మీకు ఖాతా ఉందా? $1.',
'gotaccountlink' => 'ప్రవేశించండి',
'userlogin-resetlink' => 'మీ ప్రవేశ వివరాలను మరచిపోయారా?',
'userlogin-resetpassword-link' => 'మీ సంకేతపదాన్ని మర్చిపోయారా?',
'helplogin-url' => 'Help:ప్రవేశించడం',
'userlogin-helplink' => '[[{{MediaWiki:helplogin-url}}|ప్రవేశించడానికి సహాయం]]',
'userlogin-loggedin' => 'మీరు ఈసరికే {{GENDER:$1|$1}} గా లాగిన్ అయి ఉన్నారు.
వేరే వాడుకరిగా లాగినయేందుకు కింది ఫారమును వాడండి.',
'userlogin-createanother' => 'మరొక ఖాతాను సృష్టించండి',
'createacct-join' => 'మీ సమాచారాన్ని క్రింద ఇవ్వండి.',
'createacct-another-join' => 'కొత్త ఖాతా యొక్క సమాచారాన్ని క్రింద ఇవ్వండి.',
'createacct-emailrequired' => 'ఈమెయిలు చిరునామా',
'createacct-emailoptional' => 'ఈమెయిలు చిరునామా (ఐచ్చికం)',
'createacct-email-ph' => 'మీ ఈమెయిలు చిరునామాను ఇవ్వండి',
'createacct-another-email-ph' => 'ఈమెయిలు చిరునామాను ఇవ్వండి',
'createaccountmail' => 'ఏదో ఒక తాత్కాలిక సంకేతపదాన్ని వాడి దాన్ని పేర్కొన్న ఈమెయిలు చిరునామాకు పంపించు',
'createacct-realname' => 'అసలు పేరు (ఐచ్చికం)',
'createaccountreason' => 'కారణం:',
'createacct-reason' => 'కారణం',
'createacct-reason-ph' => 'మీరు మరో ఖాతాను ఎందుకు సృష్టించుకుంటున్నారు',
'createacct-captcha' => 'భద్రతా తనిఖీ',
'createacct-imgcaptcha-ph' => 'పైన కనబడే మాటలను ఇక్కడ ఇవ్వండి',
'createacct-submit' => 'మీ ఖాతాను సృష్టించుకోండి',
'createacct-another-submit' => 'మరొక ఖాతాను సృష్టించు',
'createacct-benefit-heading' => '{{SITENAME}}ను తయారుచేసేది మీలాంటి ప్రజలే.',
'createacct-benefit-body1' => '{{PLURAL:$1|మార్పు|మార్పులు}}',
'createacct-benefit-body2' => '{{PLURAL:$1|పేజీ|పేజీలు}}',
'createacct-benefit-body3' => 'ఇటీవలి {{PLURAL:$1|సమర్పకుడు|సమర్పకులు}}',
'badretype' => 'మీరు ఇచ్చిన రెండు సంకేతపదాలు ఒకదానితో మరొకటి సరిపోలడం లేదు.',
'userexists' => 'ఇచ్చిన వాడుకరిపేరు ఇప్పటికే వాడుకలో ఉంది.
వేరే పేరును ఎంచుకోండి.',
'loginerror' => 'ప్రవేశంలో పొరపాటు',
'createacct-error' => 'పద్దు తెరవడములో తప్పు',
'createaccounterror' => 'ఖాతాని సృష్టించలేకపోయాం: $1',
'nocookiesnew' => 'ఖాతాని సృష్టించాం, కానీ మీరు ఇంకా లోనికి ప్రవేశించలేదు.
వాడుకరుల ప్రవేశానికి {{SITENAME}} కూకీలను వాడుతుంది.
మీరు కూకీలని అచేతనం చేసివున్నారు.
దయచేసి వాటిని చేతనంచేసి, మీ కొత్త వాడుకరి పేరు మరియు సంకేతపదాలతో లోనికి ప్రవేశించండి.',
'nocookieslogin' => 'వాడుకరుల ప్రవేశానికై {{SITENAME}} కూకీలను వాడుతుంది.
మీరు కుకీలని అచేతనం చేసివున్నారు.
వాటిని చేతనంచేసి ప్రయత్నించండి.',
'nocookiesfornew' => 'మూలాన్ని కనుక్కోలేకపోయాం కాబట్టి, ఈ వాడుకరి ఖాతాను సృష్టించలేకపోయాం.
మీ కంప్యూటర్లో కూకీలు చేతనమై ఉన్నాయని నిశ్చయించుకొని, ఈ పేజీని తిరిగి లోడు చేసి, మళ్ళీ ప్రయత్నించండి.',
'noname' => 'మీరు సరైన వాడుకరిపేరు ఇవ్వలేదు.',
'loginsuccesstitle' => 'ప్రవేశం విజయవంతమైనది',
'loginsuccess' => "'''మీరు ఇప్పుడు {{SITENAME}}లోనికి \"\$1\"గా ప్రవేశించారు.'''",
'nosuchuser' => '"$1" అనే పేరుతో వాడుకరులు లేరు.
వాడుకరి పేర్లు కేస్ సెన్సిటివ్.
అక్షరక్రమం సరిచూసుకోండి, లేదా [[Special:UserLogin/signup|కొత్త ఖాతా సృష్టించుకోండి]].',
'nosuchusershort' => '"$1" అనే పేరుతో సభ్యులు లేరు. పేరు సరి చూసుకోండి.',
'nouserspecified' => 'సభ్యనామాన్ని తప్పనిసరిగా ఎంచుకోవాలి.',
'login-userblocked' => 'ఈ వాడుకరిని నిరోధించారు. ప్రవేశానికి అనుమతి లేదు.',
'wrongpassword' => 'ఈ సంకేతపదం సరైనది కాదు. దయచేసి మళ్లీ ప్రయత్నించండి.',
'wrongpasswordempty' => 'ఖాళీ సంకేతపదం ఇచ్చారు. మళ్ళీ ప్రయత్నించండి.',
'passwordtooshort' => 'మీ సంకేతపదం కనీసం {{PLURAL:$1|1 అక్షరం|$1 అక్షరాల}} పొడవు ఉండాలి.',
'password-name-match' => 'మీ సంకేతపదం మీ వాడుకరిపేరుకి భిన్నంగా ఉండాలి.',
'password-login-forbidden' => 'ఈ వాడుకరిపేరు మరియు సంకేతపదాలను ఉపయోగించడం నిషిద్ధం.',
'mailmypassword' => 'సంకేతపదాన్ని మార్చు',
'passwordremindertitle' => '{{SITENAME}} కోసం కొత్త తాత్కాలిక సంకేతపదం',
'passwordremindertext' => '{{SITENAME}} ($4) లో కొత్త సంకేతపదం పంపించమని ఎవరో (బహుశ మీరే, ఐ.పీ. చిరునామా $1 నుండి) అడిగారు. వాడుకరి "$2" కొరకు "$3" అనే తాత్కాలిక సంకేతపదం సిద్ధంచేసి ఉంచాం. మీ ఉద్దేశం అదే అయితే, ఇప్పుడు మీరు సైటులోనికి ప్రవేశించి కొత్త సంకేతపదాన్ని ఎంచుకోవచ్చు. మీ తాత్కాలిక సంకేతపదం {{PLURAL:$5|ఒక రోజు|$5 రోజుల}}లో కాలంచెల్లుతుంది.

ఒకవేళ ఈ అభ్యర్థన మీరుకాక మరెవరో చేసారనుకున్నా లేదా మీ సంకేతపదం మీకు గుర్తుకువచ్చి దాన్ని మార్చకూడదు అనుకుంటున్నా, ఈ సందేశాన్ని మర్చిపోయి మీ పాత సంకేతపదాన్ని వాడడం కొనసాగించవచ్చు.',
'noemail' => 'సభ్యులు "$1"కు ఈ-మెయిలు చిరునామా నమోదయి లేదు.',
'noemailcreate' => 'మీరు సరైన ఈమెయిల్ చిరునామాని ఇవ్వాలి',
'passwordsent' => '"$1" కొరకు నమోదైన ఈ-మెయిలు చిరునామాకి కొత్త సంకేతపదాన్ని పంపించాం.
అది అందిన తర్వాత ప్రవేశించి చూడండి.',
'blocked-mailpassword' => 'దిద్దుబాట్లు చెయ్యకుండా ఈ ఐపీఅడ్రసును నిరోధించాం. అంచేత, దుశ్చర్యల నివారణ కోసం గాను, మరచిపోయిన సంకేతపదాన్ని పొందే అంశాన్ని అనుమతించము.',
'eauthentsent' => 'ఇచ్చిన ఈ-మెయిలు అడ్రసుకు ధృవీకరణ మెయిలు పంపించాం.
ఇకపై మేము ఆ ఖాతాకు మెయిలు పంపాలంటే, ముందుగా మీరు ఆ మెయిల్లో సూచించినట్లుగా చేసి, ఈ చిరునామా మీదేనని ధృవీకరించాలి.',
'throttled-mailpassword' => 'గడచిన {{PLURAL:$1|ఒక గంటలో|$1 గంటల్లో}} ఇప్పటికే  దాటుమాట మార్చినట్లుగా ఒక మెయిల్  పంపించివున్నాం.
దుశ్చర్యలను నివారించేందుకు గాను, {{PLURAL:$1|ఒక గంటకి|$1 గంటలకి}} ఒక్కసారి మాత్రమే దాటుమాట మార్పు మెయిల్ పంపిస్తాము.',
'mailerror' => 'మెయిలు పంపించడంలో లోపం: $1',
'acct_creation_throttle_hit' => 'మీ ఐపీ చిరునామా వాడుతున్న ఈ వికీ సందర్శకులు గత ఒక్క రోజులో {{PLURAL:$1|1 ఖాతాని|$1 ఖాతాలను}} సృష్టించారు, ఈ కాల వ్యవధిలో అది గరిష్ఠ పరిమితి.
అందువల్ల, ఈ ఐపీని వాడుతున్న సందర్శకులు ప్రస్తుతానికి ఇంక ఖాతాలని సృష్టించలేరు.',
'emailauthenticated' => 'మీ ఈ-మెయిలు చిరునామా $2న $3కి ధృవీకరింపబడింది.',
'emailnotauthenticated' => 'మీ ఈ-మెయిలు చిరునామాను ఇంకా ధృవీకరించలేదు. 
కింద పేర్కొన్న అంశాలకు సంబంధించి ఎటువంటి ఈ-మెయిలునూ పంపించము.',
'noemailprefs' => 'కింది అంశాలు పని చెయ్యటానికి ఈ-మెయిలు చిరునామాను నమొదుచయ్యండి.',
'emailconfirmlink' => 'మీ ఈ-మెయిలు చిరునామాను ధృవీకరించండి',
'invalidemailaddress' => 'మీరు ఇచ్చిన ఈ-మెయిలు చిరునామా సరైన రీతిలో లేనందున అంగీకరించటంలేదు.
దయచేసి ఈ-మెయిలు చిరునామాను సరైన రీతిలో ఇవ్వండి లేదా ఖాళీగా వదిలేయండి.',
'cannotchangeemail' => 'ఈ వికీలో ఖాతా ఈ-మెయిలు చిరునామాను మార్చుకోలేరు.',
'emaildisabled' => 'ఈ సైటు ఈమెయిళ్ళను పంపించలేదు.',
'accountcreated' => 'ఖాతాని సృష్టించాం',
'accountcreatedtext' => '[[{{ns:User}}:$1|$1]] ([[{{ns:User talk}}:$1|చర్చ]])కి వాడుకరి ఖాతాను సృష్టించాం.',
'createaccount-title' => '{{SITENAME}} కోసం ఖాతా సృష్టి',
'createaccount-text' => '{{SITENAME}} ($4) లో ఎవరో మీ ఈమెయిలు చిరునామాకి "$2" అనే పేరుగల ఖాతాని "$3" అనే సంకేతపదంతో సృష్టించారు.
మీరు లోనికి ప్రవేశించి మీ సంకేతపదాన్ని ఇప్పుడే మార్చుకోవాలి.

ఈ ఖాతాని పొరపాటున సృష్టిస్తే గనక, ఈ సందేశాన్ని పట్టించుకోకండి.',
'usernamehasherror' => 'వాడుకరిపేరులో హాష్ అక్షరాలు ఉండకూడదు',
'login-throttled' => 'కొద్దిసేపటిగా మీరు చాలా లాగిన్ ప్రయత్నాలు చేసారు.
మళ్ళీ ప్రయత్నించే ముందు $1 ఆగండి.',
'login-abort-generic' => 'మీ లాగిన్ ప్రయత్నం విఫలమైంది - ఆగిపోయింది',
'loginlanguagelabel' => 'భాష: $1',
'suspicious-userlogout' => 'సరిగా పనిచేయని విహారిణి లేదా కాషింగ్ ప్రాక్సీ వల్ల పంపబడడం చేత, నిష్క్రమించాలనే మీ అభ్యర్థనని నిరాకరించారు.',
'createacct-another-realname-tip' => 'అసలు పేరు ఐచ్ఛికం.
మీరు దాన్ని ఇస్తే, వాడుకరి పనుల శ్రేయస్సు ఆ పేరుకు ఆపాదించబడుతుంది.',

# Email sending
'php-mail-error-unknown' => 'PHP యొక్క mail() ఫంక్షన్‍లో ఏదో తెలియని లోపం దొర్లింది',
'user-mail-no-addy' => 'ఈ-మెయిలు చిరునామాని ఇవ్వకుండానే ఈ-మెయిలు పంపడానికి ప్రయత్నించారు.',
'user-mail-no-body' => 'ఈమెయిలును ఖాళీగానో, మరీ తక్కువ విషయంతోనో పంపేందుకు ప్రయత్నించారు.',

# Change password dialog
'changepassword' => 'సంకేతపదాన్ని మార్చండి',
'resetpass_announce' => 'మీకు పంపిన తాత్కాలిక సంకేతంతో ప్రవేశించివున్నారు.
ప్రవేశాన్ని పూర్తిచేసేందుకు, మీరు తప్పనిసరిగా ఇక్కడ కొత్త సంకేతపదాన్ని అమర్చుకోవాలి:',
'resetpass_header' => 'ఖాతా సంకేతపదం మార్పు',
'oldpassword' => 'పాత సంకేతపదం:',
'newpassword' => 'కొత్త సంకేతపదం:',
'retypenew' => 'సంకేతపదం, మళ్ళీ',
'resetpass_submit' => 'సంకేతపదాన్ని మార్చి లోనికి ప్రవేశించండి',
'changepassword-success' => 'మీ సంకేతపదం విజయవంతంగా మార్చబడింది.',
'changepassword-throttled' => 'కొద్దిసేపటిగా మీరు చాలా లాగిన్ ప్రయత్నాలు చేసారు.
మళ్ళీ ప్రయత్నించే ముందు $1 ఆగండి.',
'resetpass_forbidden' => 'సంకేతపదాలను మార్చటం కుదరదు',
'resetpass-no-info' => 'ఈ పేజీని నేరుగా చూడటానికి మీరు లోనికి ప్రవేశించివుండాలి.',
'resetpass-submit-loggedin' => 'సంకేతపదాన్ని మార్చు',
'resetpass-submit-cancel' => 'రద్దుచేయి',
'resetpass-wrong-oldpass' => 'తప్పుడు తాత్కాలిక లేదా ప్రస్తుత సంకేతపదం.
మీరు మీ సంకేతపదాన్ని ఇప్పటికే విజయవంతంగా మార్చుకొనివుండవచ్చు లేదా కొత్త తాత్కాలిక సంకేతపదం కోసం అభ్యర్థించారు.',
'resetpass-temp-password' => 'తాత్కాలిక సంకేతపదం:',
'resetpass-abort-generic' => 'ఓ పొడిగింత (ఎక్స్టెన్‍షన్) సంకేతపదం మార్పిడిని ఆపేసింది.',

# Special:PasswordReset
'passwordreset' => 'సంకేతపదాన్ని మార్చుకోండి',
'passwordreset-text-one' => 'ఈమెయిలు ద్వారా తాత్కాలిక సంకేతపదాన్ని పొందేందుకు ఈ ఫారమును నింపండి.',
'passwordreset-text-many' => '{{PLURAL:$1|ఈమెయిలు ద్వారా తాత్కాలిక సంకేతపదాన్ని పొందేందుకు ఏదో ఒక ఫీల్డును నింపండి.Fill in one of the fields to receive a temporary password via email.}}',
'passwordreset-legend' => 'సంకేతపదాన్ని మార్చుకోండి',
'passwordreset-disabled' => 'ఈ వికీలో సంకేతపదాల మార్పును అచేతనం చేసాం.',
'passwordreset-emaildisabled' => 'ఈ వికీలో ఈమెయిలు విశేషాలను అశక్తం చేసాం.',
'passwordreset-username' => 'వాడుకరి పేరు:',
'passwordreset-domain' => 'డొమైన్:',
'passwordreset-capture' => 'ఈమెయిలు ఎలా ఉంటుందో చూస్తారా?',
'passwordreset-capture-help' => 'ఈ పెట్టెను చెక్ చేస్తే, ఈమెయిలును (తాత్కాలిక సంకేతపదంతో) వాడుకరికి పంపిస్తూనే, మీకూ చూపిస్తాం.',
'passwordreset-email' => 'ఈ-మెయిలు చిరునామా:',
'passwordreset-emailtitle' => '{{SITENAME}}లో ఖాతా వివరాలు',
'passwordreset-emailtext-ip' => 'ఎవరో (బహుశా మీరే, ఐపీ అడ్రసు $1 నుంచి)  {{SITENAME}} ($4) లో మీ సంకేతపదాన్ని మార్చమంటూ అడిగారు. కింది వాడుకరి {{PLURAL:$3|ఖాతా|ఖాతాలు}}
ఈ ఈమెయిలు చిరునామాతో అనుసంధింపబడి ఉన్నాయి:

$2

{{PLURAL:$3|ఈ సంకేతపదానికి|ఈ సంకేతపదాలకు}} {{PLURAL:$5|ఒక్కరోజులో|$5 రోజుల్లో}} కాలం చెల్లుతుంది.
ఇప్పుడు మీరు లాగినై కొత్త సంకేతపదాన్ని ఎంచుకోవాల్సి ఉంటుంది. ఈ అభ్యర్ధన చేసింది మరెవరైనా అయినా, లేక మీ అసలు సంకేతపదం మీకు గుర్తొచ్చి దాన్ని మార్చాల్సిన అవసరం లేదని అనుకున్నా, మీరీ సందేశాన్ని పట్టించుకోనక్కర్లేదు. పాత సంకేతపదాన్నే వాడుకోవచ్చు.',
'passwordreset-emailtext-user' => '{{SITENAME}} లోని వాడుకరి $1, {{SITENAME}} ($4) లోని మీ సంకేతపదాన్ని మార్చమంటూ అడిగారు. కింది వాడుకరి {{PLURAL:$3|ఖాతా|ఖాతాలు}}
ఈ ఈమెయిలు అడ్రసుతో అనుసంధింపబడి ఉన్నాయి:

$2

{{PLURAL:$3|ఈ తాత్కాలిక సంకేతపదానికి|ఈ తాత్కాలిక సంకేతపదాలకు}} {{PLURAL:$5|ఒక్క రోజులో|$5 రోజుల్లో}} కాలం చెల్లుతుంది.
ఇప్పుడు మీరు లాగినై కొత్త సంకేతపదాన్ని ఎంచుకోవాల్సి ఉంటుంది. ఈ అభ్యర్ధన చేసింది మరెవరైనా అయినా, లేక మీ అసలు సంకేతపదం మీకు గుర్తొచ్చి దాన్ని మార్చాల్సిన అవసరం లేదని అనుకున్నా, మీరీ సందేశాన్ని పట్టించుకోనక్కర్లేదు. పాత సంకేతపదాన్నే వాడుకోవచ్చు.',
'passwordreset-emailelement' => 'వాడుకరిపేరు: $1
తాత్కాలిక సంకేతపదం: $2',
'passwordreset-emailsent' => 'సంకేతపదం మార్పు ఈమెయిలును పంపించాం.',
'passwordreset-emailsent-capture' => 'క్రింద చూపిన సంకేతపదం మార్పు ఈమెయిలును పంపించాం.',
'passwordreset-emailerror-capture' => 'కింద చూపిన సంకేతపదం మార్పు ఈమెయిలును తయారుచేసాం. కానీ దాన్ని {{GENDER:$2|వాడుకరికి}} పంపడం విఫలమైంది: $1',

# Special:ChangeEmail
'changeemail' => 'ఈ-మెయిలు చిరునామా మార్పు',
'changeemail-header' => 'ఖాతా ఈ-మెయిల్ చిరునామాని మార్చండి',
'changeemail-text' => 'మీ ఈమెయిలు చిరునామాని మార్చుకోడానికి ఈ ఫారాన్ని నింపండి. ఈ మార్పుని నిర్ధారించడానికి మీ సంకేతపదాన్ని ఇవ్వాల్సివస్తుంది.',
'changeemail-no-info' => 'ఈ పేజీని నేరుగా చూడటానికి మీరు లోనికి ప్రవేశించివుండాలి.',
'changeemail-oldemail' => 'ప్రస్తుత ఈ-మెయిలు చిరునామా:',
'changeemail-newemail' => 'కొత్త ఈ-మెయిలు చిరునామా:',
'changeemail-none' => '(ఏమీలేదు)',
'changeemail-password' => 'మీ {{SITENAME}} సంకేతపదం:',
'changeemail-submit' => 'ఈ-మెయిల్ మార్చు',
'changeemail-cancel' => 'రద్దుచేయి',
'changeemail-throttled' => 'మరీ ఎక్కువగా లాగిన్ ప్రయత్నాలు చేసారు.
మళ్ళీ ప్రయత్నించే ముందు $1 ఆగండి.',

# Special:ResetTokens
'resettokens' => 'టోకెన్ ను రీసెట్ చెయ్యి',
'resettokens-text' => 'మీ ఖాతాకు అనుబంధంగా ఉన్న గోపనీయ డేటాను చూపించే టోకెన్లను మీరు ఇక్కడ రీసెట్ చెయ్యవచ్చు.

మీరా టోకెన్లను పొరపాటున ఎవరికైనా ఇచ్చి ఉన్నా, లేక మీ ఖాతా వివరాలు మరెవరికైనా తెలిసిపోయినా మీరీ పని చెయ్యాలి.',
'resettokens-no-tokens' => 'రీసెట్ చేసేందుకు టోకెన్లేమీ లేవు.',
'resettokens-legend' => 'టోకెన్లను రీసెట్ చెయ్యి',
'resettokens-tokens' => 'టోకెన్లు:',
'resettokens-token-label' => '$1 (ప్రస్తుత విలువ: $2)',
'resettokens-watchlist-token' => '[[Special:Watchlist|changes to pages on your watchlist]] యొక్క జాల వడ్డన (Atom/RSS) కు టోకెన్',
'resettokens-done' => 'టోకెన్లను రీసెట్ చేసాం.',
'resettokens-resetbutton' => 'ఎంచుకున్న టోకెన్లను రీసెట్ చెయ్యి',

# Edit page toolbar
'bold_sample' => 'బొద్దు అక్షరాలు',
'bold_tip' => 'బొద్దు అక్షరాలు',
'italic_sample' => 'వాలు పాఠ్యం',
'italic_tip' => 'వాలు పాఠ్యం',
'link_sample' => 'లింకు పేరు',
'link_tip' => 'అంతర్గత లింకు',
'extlink_sample' => 'http://www.example.com లింకు పేరు',
'extlink_tip' => 'బయటి లింకు (దీనికి ముందు http:// ఇవ్వటం మరువకండి)',
'headline_sample' => 'శీర్షిక పాఠ్యం',
'headline_tip' => '2వ స్థాయి శీర్షిక',
'nowiki_sample' => 'ఫార్మాటు చేయకూడని పాఠ్యాన్ని ఇక్కడ చేర్చండి',
'nowiki_tip' => 'వికీ ఫార్మాటును పట్టించుకోవద్దు',
'image_tip' => 'పొదిగిన ఫైలు',
'media_tip' => 'దస్త్రపు లంకె',
'sig_tip' => 'సమయంతో సహా మీ సంతకం',
'hr_tip' => 'అడ్డగీత (అరుదుగా వాడండి)',

# Edit pages
'summary' => 'సారాంశం:',
'subject' => 'విషయం/శీర్షిక:',
'minoredit' => 'ఇది ఒక చిన్న మార్పు',
'watchthis' => 'ఈ పుట మీద కన్నేసి ఉంచు',
'savearticle' => 'పేజీని భద్రపరచు',
'preview' => 'మునుజూపు',
'showpreview' => 'మునుజూపు',
'showlivepreview' => 'తాజా మునుజూపు',
'showdiff' => 'తేడాలను చూపించు',
'anoneditwarning' => "'''హెచ్చరిక:''' మీరు లోనికి ప్రవేశించలేదు.
ఈ పేజీ దిద్దుబాటు చరిత్రలో మీ ఐపీ చిరునామా నమోదవుతుంది.",
'anonpreviewwarning' => "''మీరు లోనికి ప్రవేశించలేదు. భద్రపరిస్తే ఈ పేజీ యొక్క దిద్దుబాటు చరిత్రలో మీ ఐపీ చిరునామా నమోదవుతుంది.''",
'missingsummary' => "'''గుర్తు చేస్తున్నాం:''' మీరు దిద్దుబాటు సారాంశమేమీ ఇవ్వలేదు. పేజీని మళ్ళీ భద్రపరచమని చెబితే సారాంశమేమీ లేకుండానే దిద్దుబాటును భద్రపరుస్తాం.",
'missingcommenttext' => 'కింద ఓ వ్యాఖ్య రాయండి.',
'missingcommentheader' => "'''గుర్తు చేస్తున్నాం''': ఈ వ్యాఖ్యకు మీరు విషయం/శీర్షిక పెట్టలేదు.
\"{{int:savearticle}}\"ని మళ్ళీ నొక్కితే, మీ మార్పుకి విషయం/శీర్షిక ఏమీ లేకుండానే భద్రపరుస్తాం.",
'summary-preview' => 'మీరు రాసిన సారాంశం:',
'subject-preview' => 'విషయం/శీర్షిక మునుజూపు:',
'blockedtitle' => 'సభ్యునిపై నిరోధం అమలయింది',
'blockedtext' => "'''మీ వాడుకరి పేరుని లేదా ఐ.పీ. చిరునామాని నిరోధించారు.'''

నిరోధించినది $1.
అందుకు ఇచ్చిన కారణం: ''$2''

* నిరోధం మొదలైన సమయం: $8
* నిరోధించిన కాలం: $6
* నిరోధానికి గురైనవారు: $7

ఈ నిరోధంపై చర్చించేందుకు మీరు $1ను గాని, మరెవరైనా [[{{MediaWiki:Grouppage-sysop}}|నిర్వాహకులను]] గాని సంప్రదించవచ్చు.
మీ [[Special:Preferences|ఖాతా అభిరుచులలో]] సరైన ఈ-మెయిలు చిరునామా ఇచ్చివుండకపోయినా లేదా మిమ్మల్ని  'ఈ వాడుకరికి ఈ-మెయిలు పంపు' సౌలభ్యాన్ని వాడుకోవడం నుండి నిరోధించివున్నా మీరు ఈమెయిలు ద్వారా సంప్రదించలేరు.
మీ ప్రస్తుత ఐ.పీ. చిరునామా $3, మరియు నిరోధపు ID #$5.
మీ సంప్రదింపులన్నిటిలోనూ వీటిని పేర్కొనండి.",
'autoblockedtext' => 'మీ ఐపీ చిరునామా ఆటోమాటిగ్గా నిరోధించబడింది. ఎందుకంటే ఇదే ఐపీ చిరునామాని ఓ నిరోధిత వాడుకరి ఉపయోగించారు. ఆ వాడుకరిని $1 నిరోధించారు.
అందుకు ఇచ్చిన కారణం ఇదీ:

:\'\'$2\'\'

* నిరోధం మొదలైన సమయం: $8
* నిరోధించిన కాలం: $6
* ఉద్దేశించిన నిరోధిత వాడుకరి: $7

ఈ నిరోధం గురించి చర్చించేందుకు మీరు $1 ను గానీ, లేదా ఇతర [[{{MediaWiki:Grouppage-sysop}}|నిర్వాహకులను]] గానీ సంప్రదించండి.

మీ [[Special:Preferences|అభిరుచులలో]] సరైన ఈమెయిలు ఐడీని ఇచ్చి ఉంటే తప్ప, మీరు "ఈ సభ్యునికి మెయిలు పంపు" అనే అంశాన్ని వాడజాలరని గమనించండి. ఆ సౌలభ్యాన్ని వాడటం నుండి మిమ్మల్ని నిరోధించలేదు.

మీ ప్రస్తుత ఐపీ చిరునామా $3, మరియు నిరోధపు ఐడీ: $5.
మీ సంప్రదింపులన్నిటిలోను అన్ని పై వివరాలను ఉదహరించండి.',
'blockednoreason' => 'కారణమేమీ ఇవ్వలేదు',
'whitelistedittext' => 'పుటలలో మార్పులు చెయ్యడానికి మీరు $1 ఉండాలి.',
'confirmedittext' => 'పేజీల్లో మార్పులు చేసేముందు మీ ఈ-మెయిలు చిరునామా ధృవీకరించాలి. [[Special:Preferences|మీ అభిరుచుల]]లో మీ ఈ-మెయిలు చిరునామా రాసి, ధృవీకరించండి.',
'nosuchsectiontitle' => 'విభాగాన్ని కనగొనలేకపోయాం',
'nosuchsectiontext' => 'మీరు లేని విభాగాన్ని మార్చడానికి ప్రయత్నించారు.
మీరు పేజీని చూస్తూన్నప్పుడు దాన్ని ఎవరైనా తరలించి లేదా తొలగించి ఉండవచ్చు.',
'loginreqtitle' => 'ప్రవేశము తప్పనిసరి',
'loginreqlink' => 'లాగినవండి',
'loginreqpagetext' => 'ఇతర పుటలను చూడడానికి మీరు $1 ఉండాలి.',
'accmailtitle' => 'సంకేతపదం పంపించబడింది.',
'accmailtext' => "[[User talk:$1|$1]] కొరకు ఒక యాదృచ్ఛిక సంకేతపదాన్ని $2కి పంపించాం. లాగినయ్యాక, ''[[Special:ChangePassword|సంకేతపదాన్ని మార్చుకోండి]]'' అనే పేజీలో ఈ సంకేతపదాన్ని మార్చుకోవచ్చు.",
'newarticle' => '(కొత్తది)',
'newarticletext' => "ఈ లింకుకు సంబంధించిన పేజీ ఉనికిలొ లేదు.
కింది పెట్టెలో మీ రచనను టైపు చేసి ఆ పేజీని సృష్టించండి (దీనిపై సమాచారం కొరకు [[{{MediaWiki:Helppage}}|సహాయం]] పేజీ చూడండి). మీరిక్కడికి పొరపాటున వచ్చి ఉంటే, మీ బ్రౌజరు '''back''' మీట నొక్కండి.",
'anontalkpagetext' => "----''ఇది ఒక అజ్ఞాత వాడుకరి చర్చా పేజీ. ఆ వాడుకరి ఇంకా తనకై ఖాతాను సృష్టించుకోలేదు, లేదా ఖాతా ఉన్నా దానిని ఉపయోగించడం లేదు. అజ్ఞాత వాడుకరులను గుర్తించడానికి అంకెలతో ఉండే ఐ.పీ. చిరునామాను వాడుతాం. కానీ, ఒకే ఐ.పీ. చిరునామాని చాలా మంది వాడుకరులు ఉపయోగించే అవకాశం ఉంది. మీరు అజ్ఞాత వాడుకరి అయితే మరియు సంబంధంలేని వ్యాఖ్యలు మిమ్మల్ని ఉద్దేశించినట్టుగా అనిపిస్తే, భవిష్యత్తులో ఇతర అజ్ఞాత వాడుకరులతో అయోమయం లేకుండా ఉండటానికి, దయచేసి [[Special:UserLogin/signup|ఖాతాను సృష్టించుకోండి]] లేదా [[Special:UserLogin|లోనికి ప్రవేశించండి]].''",
'noarticletext' => 'ప్రస్తుతం ఈ పేజీలో పాఠ్యమేమీ లేదు.
వేరే పేజీలలో [[Special:Search/{{PAGENAME}}|ఈ పేజీ శీర్షిక కోసం వెతకవచ్చు]],
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} సంబంధిత చిట్టాలు చూడవచ్చు],
లేదా [{{fullurl:{{FULLPAGENAME}}|action=edit}} ఈ పేజీని మార్చవచ్చు]</span>.',
'noarticletext-nopermission' => 'ప్రస్తుతం ఈ పేజీలో పాఠ్యమేమీ లేదు.
మీరు ఇతర పేజీలలో [[Special:Search/{{PAGENAME}}|ఈ పేజీ శీర్షిక కోసం వెతకవచ్చు]], లేదా <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} సంబంధిత చిట్టాలలో వెతకవచ్చు]</span>, కానీ ఈ పేజీని సృష్టించడానికి మీకు అనుమతి లేదు.',
'missing-revision' => '"{{PAGENAME}}" అనే పేజీ యొక్క కూర్పు #$1 ఉనికిలో లేదు. సాధారణంగా ఏదైనా తొలగించబడిన పేజీ యొక్క కాలం చెల్లిన చరితం లింకును నొక్కినపుడు ఇది జరుగుతుంది. వివరాలు [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} తొలగింపు లాగ్] లో దొరుకుతాయి.',
'userpage-userdoesnotexist' => '"<nowiki>$1</nowiki>" అనే వాడుకరి ఖాతా నమోదయిలేదు. మీరు ఈ పేజీని సృష్టించ/సరిదిద్దాలనుకుంటే, సరిచూసుకోండి.',
'userpage-userdoesnotexist-view' => 'వాడుకరి ఖాతా "$1" నమోదుకాలేదు.',
'blocked-notice-logextract' => 'ప్రస్తుతం ఈ వాడుకరిని నిరోధించారు.
నిరోధపు చిట్టాలోని చివరి పద్దుని మీ సమాచారం కోసం ఈ క్రింద ఇస్తున్నాం:',
'clearyourcache' => '<strong>గమనిక:</strong> భద్రపరచిన తర్వాత, మార్పులను చూడాలంటే మీ విహారిణి యొక్క కోశాన్ని తీసేయాల్సిరావచ్చు.
*<strong>ఫైర్‌ఫాక్స్‌ / సఫారి:</strong> <em>Shift</em> మీటని నొక్కిపట్టి <em>Reload</em>ని నొక్కండి లేదా <em>Ctrl-F5</em> గానీ <em>Ctrl-R</em> (మాకింటోషులో <em>⌘-Shift-R</em>) గానీ నొక్కండి
* <strong>గూగుల్ క్రోమ్:</strong> <em>Ctrl-Shift-R</em> (మాక్ లో <em>⌘-Shift-R</em>) నొక్కండి
*<strong>ఇంటర్నెట్ ఎక్ప్లోరర్:</strong> <em>Ctrl</em> ను నొక్కిపట్టి <em>Refresh</em> నొక్కండి లేదా <em>Ctrl-F5</em> నొక్కండి.
*<em>ఒపెరా:</em> <em>Tools → Preferences</em> ద్వారా కోశాన్ని ఖాళీ చెయ్యండి',
'usercssyoucanpreview' => "'''చిట్కా:''' భద్రపరిచేముందు మీ కొత్త CSSని పరీక్షించడానికి \"{{int:showpreview}}\" అనే బొత్తాన్ని వాడండి.",
'userjsyoucanpreview' => "'''చిట్కా:''' భద్రపరిచేముందు మీ కొత్త జావాస్క్రిప్టుని పరీక్షించడానికి \"{{int:showpreview}}\" అనే బొత్తాన్ని వాడండి.",
'usercsspreview' => "'''మీరు వాడుకరి CSSను కేవలం సరిచూస్తున్నారని గుర్తుంచుకోండి.'''
'''దాన్నింకా భద్రపరచలేదు!'''",
'userjspreview' => "'''గుర్తుంచుకోండి, మీరింకా మీ వాడుకరి జావాస్క్రిప్ట్&zwnj;ను భద్రపరచలేదు, కేవలం పరీక్షిస్తున్నారు/సరిచూస్తున్నారు!'''",
'sitecsspreview' => "'''మీరు చూస్తున్నది ఈ CSS మునుజూపును మాత్రమేనని గుర్తుంచుకోండి.'''
'''దీన్నింకా భద్రపరచలేదు!'''",
'sitejspreview' => "'''మీరు చూస్తున్నది ఈ JavaScript మునుజూపును మాత్రమేనని గుర్తుంచుకోండి.''' 
'''దీన్నింకా భద్రపరచలేదు!'''",
'userinvalidcssjstitle' => "'''హెచ్చరిక:''' \"\$1\" అనే అలంకారం లేదు.
అభిమత .css మరియు .js పుటల శీర్షికలు ఇంగ్లీషు చిన్నబడి అక్షరాల లోనే ఉండాలని గుర్తుంచుకోండి, ఉదాహరణకు ఇలా {{ns:user}}:Foo/vector.css అంతేగానీ, {{ns:user}}:Foo/Vector.css ఇలా కాదు.",
'updated' => '(నవీకరించబడింది)',
'note' => "'''గమనిక:'''",
'previewnote' => "'''ఇది మునుజూపు మాత్రమేనని గుర్తుంచుకోండి.'''
మీ మార్పులు ఇంకా భద్రమవ్వలేదు!",
'continue-editing' => 'సరిదిద్దే చోటుకి వెళ్ళండి',
'previewconflict' => 'భద్రపరచిన తరువాత పై టెక్స్ట్‌ ఏరియాలోని టెక్స్టు ఇలాగ కనిపిస్తుంది.',
'session_fail_preview' => "'''క్షమించండి! సెషను డేటా పోవడం వలన మీ మార్పులను స్వీకరించలేకపోతున్నాం.'''
దయచేసి మళ్ళీ ప్రయత్నించండి.
అయినా పని జరక్కపోతే, ఓసారి [[Special:UserLogout|నిష్క్రమించి]] మళ్ళీ లోనికి ప్రవేశించి ప్రయత్నించండి.",
'session_fail_preview_html' => "'''సారీ! సెషను డేటా పోవడం వలన మీ దిద్దుబాటును ప్రాసెస్ చెయ్యలేలేక పోతున్నాం.'''

''{{SITENAME}}లో ముడి HTML సశక్తమై ఉంది కాబట్టి, జావాస్క్రిప్టు దాడుల నుండి రక్షణగా మునుజూపును దాచేశాం.''

'''మీరు చేసినది సరైన దిద్దుబాటే అయితే, మళ్ళీ ప్రయత్నించండి. అయినా పనిచెయ్యకపోతే, ఓ సారి లాగౌటయ్యి, మళ్ళీ లాగినయి చూడండి.'''",
'token_suffix_mismatch' => "'''మీ క్లయంటు, దిద్దుబాటు టోకెన్‌లోని వ్యాకరణ గుర్తులను గజిబిజి చేసింది కాబట్టి మీ దిద్దుబాటును తిరస్కరించాం. పేజీలోని పాఠ్యాన్ని చెడగొట్టకుండా ఉండేందుకు గాను, ఆ దిద్దుబాటును రద్దు చేశాం. వెబ్‌లో ఉండే లోపభూయిష్టమైన అజ్ఞాత ప్రాక్సీ సర్వీసులను వాడినపుడు ఒక్కోసారి ఇలా జరుగుతుంది.'''",
'edit_form_incomplete' => '’’’ఈ ఎడిట్ ఫారంలోని కొన్ని భాగాలు సర్వరును చేరలేదు; మీ మార్పుచేర్పులు భద్రంగా ఉన్నాయని ధృవపరచుకుని, మళ్ళీ ప్రయత్నించండి.’’’',
'editing' => '$1కి మార్పులు',
'creating' => '$1 పేజీని సృష్టిస్తున్నారు',
'editingsection' => '$1కు మార్పులు (విభాగం)',
'editingcomment' => '$1 దిద్దుబాటు (కొత్త విభాగం)',
'editconflict' => 'దిద్దుబాటు ఘర్షణ: $1',
'explainconflict' => "మీరు మార్పులు చెయ్యడం మొదలుపెట్టిన తరువాత, వేరే ఎవరో ఈ పుటని మార్పారు.
పైన ఉన్న పాఠ్య పేటికలో ఈ పుట యొక్క ప్రస్తుతపు పాఠ్యం ఉంది.
మీరు చేసిన మార్పులు క్రింది పాఠ్య పేటికలో చూపించబడ్డాయి.
మీరు మీ మార్పులను ప్రస్తుతపు పాఠ్యంలో విలీనం చెయ్యవలసి ఉంటుంది.
మీరు \"{{int:savearticle}}\"ను నొక్కినపుడు, పై పాఠ్య పేటికలో ఉన్న పాఠ్యం '''మాత్రమే''' భద్రపరచబడుతుంది.",
'yourtext' => 'మీ పాఠ్యం',
'storedversion' => 'భద్రపరచిన కూర్పు',
'nonunicodebrowser' => "'''WARNING: Your browser is not unicode compliant. A workaround is in place to allow you to safely edit pages: non-ASCII characters will appear in the edit box as hexadecimal codes.'''",
'editingold' => "'''హెచ్చ రిక: ఈ పేజీ యొక్క కాలం చెల్లిన సంచికను మీరు మరుస్తున్నారు. దీనిని భద్రపరిస్తే, ఆ సంచిక తరువాత ఈ పేజీలో జరిగిన మార్పులన్నీ పోతాయి.'''",
'yourdiff' => 'తేడాలు',
'copyrightwarning' => "{{SITENAME}}కు సమర్పించే అన్ని రచనలూ $2కు లోబడి ప్రచురింపబడినట్లుగా భావించబడతాయి (వివరాలకు $1 చూడండి). మీ రచనలను ఎవ్వరూ మార్చ రాదనీ లెదా వేరే ఎవ్వరూ వాడుకో రాదని మీరు భావిస్తే, ఇక్కడ ప్రచురించకండి.<br /> మీ స్వీయ రచనను గాని, సార్వజనీనమైన రచననుగాని, ఇతర ఉచిత వనరుల నుండి సేకరించిన రచననుగాని మాత్రమే ప్రచురిస్తున్నానని కూడా మీరు ప్రమాణం చేస్తున్నారు. '''కాపీహక్కులుగల రచనను తగిన అనుమతి లేకుండా సమర్పించకండి!'''",
'copyrightwarning2' => "{{SITENAME}}లో ప్రచురించే రచనలన్నిటినీ ఇతర రచయితలు సరిదిద్దడం, మార్చడం, తొలగించడం చేసే అవకాశం ఉంది. మీ రచనలను అలా నిర్దాక్షిణ్యంగా దిద్దుబాట్లు చెయ్యడం మీకిష్టం లేకపోతే, వాటిని ఇక్కడ ప్రచురించకండి. <br />
ఈ రచనను మీరే చేసారని, లేదా ఏదైనా సార్వజనిక వనరు నుండి కాపీ చేసి తెచ్చారని, లేదా అలాంటి ఉచిత, స్వేచ్ఛా వనరు నుండి తెచ్చారని మాకు వాగ్దానం చేస్తున్నారు. (వివరాలకు $1 చూడండి).
'''తగు అనుమతులు లేకుండా కాపీ హక్కులు గల రచనలను సమర్పించకండి!'''",
'longpageerror' => "'''పొరపాటు: మీరు సమర్పించిన పాఠ్యం, గరిష్ఠ పరిమితి అయిన {{PLURAL:$2|ఒక కిలోబైటుని|$2 కిలోబైట్లను}} మించి {{PLURAL:$1|ఒక కిలోబైటు|$1 కిలోబైట్ల}} పొడవుంది.'''
 దీన్ని భద్రపరచలేము.",
'readonlywarning' => '<strong>హెచ్చరిక: నిర్వహణ కొరకు డేటాబేసుకి తాళం వేసారు. కాబట్టి మీ మార్పుచేర్పులను ఇప్పుడు భద్రపరచలేరు.</strong> 
మీ మార్పులను ఒక ఫాఠ్య ఫైలులోకి కాపీ చేసి భద్రపరచుకొని, తరువాత సమర్పించండి.

తాళం వేసిన నిర్వాహకుడి వివరణ ఇదీ: $1',
'protectedpagewarning' => "'''హెచ్చరిక: ఈ పేజీ సంరక్షించబడినది, కనుక నిర్వాహక అనుమతులు ఉన్న వాడుకరులు మాత్రమే మార్చగలరు.'''
చివరి చిట్టా పద్దుని మీ సమాచారం కోసం ఇక్కడ ఇస్తున్నాం:",
'semiprotectedpagewarning' => "'''గమనిక:''' నమోదయిన వాడుకరులు మాత్రమే మార్పులు చెయ్యగలిగేలా ఈ పేజీకి సంరక్షించారు.
మీ సమాచారం కోసం చివరి చిట్టా పద్దుని ఇక్కడ ఇస్తున్నాం:",
'cascadeprotectedwarning' => "'''హెచ్చరిక:''' ఈ పేజీ, కాస్కేడింగు రక్షణలో ఉన్న కింది {{PLURAL:$1|పేజీ|పేజీల్లో}} ఇంక్లూడు అయి ఉంది కాబట్టి, నిర్వాహకులు తప్ప ఇతరులు దిద్దుబాటు చేసే వీలు లేకుండా పేజీని లాకు చేసాం:",
'titleprotectedwarning' => "హెచ్చరిక:  ఈ పేజీని సంరక్షించారు కాబట్టి దీన్ని సృష్టించడానికి [[Special:ListGroupRights|ప్రత్యేక హక్కులు]] ఉండాలి.'''
మీ సమాచారం కోసం చివరి చిట్టా పద్దుని ఇక్కడ ఇస్తున్నాం:",
'templatesused' => 'ఈ పేజీలో వాడిన {{PLURAL:$1|మూస|మూసలు}}:',
'templatesusedpreview' => 'ఈ మునుజూపులో వాడిన {{PLURAL:$1|మూస|మూసలు}}:',
'templatesusedsection' => 'ఈ విభాగంలో వాడిన {{PLURAL:$1|మూస|మూసలు}}:',
'template-protected' => '(సంరక్షితం)',
'template-semiprotected' => '(సెమీ-రక్షణలో ఉంది)',
'hiddencategories' => 'ఈ పేజీ {{PLURAL:$1|ఒక దాచిన వర్గంలో|$1 దాచిన వర్గాల్లో}} ఉంది:',
'nocreatetext' => '{{SITENAME}}లో కొత్త పేజీలు సృష్టించడాన్ని నియంత్రించారు.
మీరు వెనక్కి వెళ్ళి వేరే పేజీలు మార్చవచ్చు, లేదా [[Special:UserLogin|లోనికి ప్రవేశించండి లేదా ఖాతా సృష్టించుకోండి]].',
'nocreate-loggedin' => 'కొత్త పేజీలను సృష్టించేందుకు మీకు అనుమతి లేదు.',
'sectioneditnotsupported-title' => 'విభాగపు దిద్దిబాట్లకి తొడ్పాటు లేదు',
'sectioneditnotsupported-text' => 'ఈ పేజీలో విభాగాల దిద్దుబాటుకి తోడ్పాటు లేదు.',
'permissionserrors' => 'అనుమతి లోపం',
'permissionserrorstext' => 'కింద పేర్కొన్న {{PLURAL:$1|కారణం|కారణాల}} మూలంగా, ఆ పని చెయ్యడానికి మీకు అనుమతిలేదు:',
'permissionserrorstext-withaction' => 'ఈ క్రింది {{PLURAL:$1|కారణం|కారణాల}} వల్ల, మీకు $2 అనుమతి లేదు:',
'recreate-moveddeleted-warn' => "'''హెచ్చరిక: ఇంతకు మునుపు ఒకసారి తొలగించిన పేజీని మళ్లీ సృష్టిద్దామని మీరు ప్రయత్నిస్తున్నారు.'''

ఈ పేజీపై మార్పులు చేసేముందు, అవి ఇక్కడ ఉండతగినవేనా కాదా అని ఒకసారి ఆలోచించండి.
మీ సౌలభ్యం కొరకు ఈ పేజీ యొక్క తొలగింపు మరియు తరలింపు చిట్టా ఇక్కడ ఇచ్చాము:",
'moveddeleted-notice' => 'ఈ పేజీని తొలగించారు.
సమాచారం కొరకు ఈ పేజీ యొక్క తొలగింపు మరియు తరలింపు చిట్టాని క్రింద ఇచ్చాం.',
'log-fulllog' => 'పూర్తి చిట్టాని చూడండి',
'edit-hook-aborted' => 'కొక్కెం మార్పుని విచ్ఛిన్నం చేసింది.
అది ఎటువంటి వివరణా ఇవ్వలేదు.',
'edit-gone-missing' => 'పేజీని మార్చలేము.
దీన్ని తొలగించినట్టున్నారు.',
'edit-conflict' => 'మార్పు సంఘర్షణ.',
'edit-no-change' => 'పాఠ్యంలో ఏమీ మార్పులు లేవు గనక, మీ మార్పుని పట్టించుకోవట్లేదు.',
'postedit-confirmation' => 'మీ మార్పు భద్రమయ్యింది.',
'edit-already-exists' => 'కొత్త పేజీని సృష్టించలేము.
అది ఇప్పటికే ఉంది.',
'defaultmessagetext' => 'అప్రమేయ సందేశపు పాఠ్యం',
'content-failed-to-parse' => '$1 మోడల్ కొరకు $2 పాఠ్యాన్ని పార్స్ చెయ్యలేకపోయాం: $3',
'invalid-content-data' => 'తప్పుడు విషయం',
'content-not-allowed-here' => '[[$2]] పేజీలో పాఠ్యం "$1" కి అనుమతి లేదు',
'editwarning-warning' => 'ఈ పేజీని వదిలివెళ్ళడం వల్ల మీరు చేసిన మార్పులను కోల్పోయే అవకాశం ఉంది.
మీరు ప్రవేశించివుంటే, ఈ హెచ్చరికని మీ అభిరుచులలో "మరపులు" అనే విభాగంలో అచేతనం చేసుకోవచ్చు.',
'editpage-notsupportedcontentformat-title' => 'పాఠ్యపు ఆకృతికి మద్దతు లేదు',
'editpage-notsupportedcontentformat-text' => '$2 పాఠ్యపు మోడల్, పాఠ్యపు ఆకృతి $1 కి మద్దతు ఇవ్వదు',

# Content models
'content-model-wikitext' => 'వికీపాఠ్యం',
'content-model-text' => 'సాదా పాఠ్యం',
'content-model-javascript' => 'జావాస్క్రిప్ట్',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => 'హెచ్చరిక: ఈ పేజీలో ఖరీదైన పార్సరు పిలుపులు చాలా ఉన్నాయి.

పార్సరు {{PLURAL:$2|పిలుపు|పిలుపులు}} $2 కంటే తక్కువ ఉండాలి,  ప్రస్తుతం {{PLURAL:$1|$1 పిలుపు ఉంది|$1  పిలుపులు ఉన్నాయి}}.',
'expensive-parserfunction-category' => 'పార్సరు సందేశాలు అధికంగా ఉన్న పేజీలు',
'post-expand-template-inclusion-warning' => "'''హెచ్చరిక''': మూస చేర్పు సైజు చాలా పెద్దదిగా ఉంది.
కొన్ని మూసలను చేర్చలేదు.",
'post-expand-template-inclusion-category' => 'మూస చేర్పు సైజును అధిగమించిన పేజీలు',
'post-expand-template-argument-warning' => 'హెచ్చరిక: చాల పెద్ద సైజున్న మూస ఆర్గ్యుమెంటు, కనీసం ఒకటి, ఈ పేజీలో ఉంది.
ఈ ఆర్గ్యుమెంట్లను వదలివేసాం.',
'post-expand-template-argument-category' => 'తొలగించిన మూస ఆర్గ్యుమెంట్లు ఉన్న పేజీలు',
'parser-template-loop-warning' => 'మూస లూపు కనబడింది: [[$1]]',
'parser-template-recursion-depth-warning' => 'మూస రికర్షను లోతు అధిగమించబడింది ($1)',
'language-converter-depth-warning' => 'భాషా మార్పిడి లోతు పరిమితిని అధిగమించారు ($1)',

# "Undo" feature
'undo-success' => 'దిద్దుబాటును రద్దు చెయ్యవచ్చు. కింది పోలికను చూసి, మీరు చెయ్యదలచినది ఇదేనని నిర్ధారించుకోండి. ఆ తరువాత మార్పులను భద్రపరచి దిద్దుబాటు రద్దును పూర్తి చెయ్యండి.',
'undo-failure' => 'మధ్యలో జరిగిన దిద్దుబాట్లతో తలెత్తిన ఘర్షణ కారణంగా ఈ దిద్దుబాటును రద్దు చెయ్యలేక పోయాం.',
'undo-norev' => 'ఈ దిద్దుబాటును అసలు లేకపోవటం వలన, లేదా తొలగించేయడం వలన రద్దుచేయలేకపోతున్నాం.',
'undo-summary' => '[[Special:Contributions/$2|$2]] ([[User talk:$2|చర్చ]]) దిద్దుబాటు చేసిన కూర్పు $1 ను రద్దు చేసారు',

# Account creation failure
'cantcreateaccounttitle' => 'ఈ ఖాతా తెరవలేము',
'cantcreateaccount-text' => "ఈ ఐపీ అడ్రసు ('''$1''') నుండి ఖాతా సృష్టించడాన్ని [[User:$3|$3]] నిరోధించారు.

$3 చెప్పిన కారణం: ''$2''",
'cantcreateaccount-range-text' => "'''$1''' శ్రేణిలోని IP చిరునామాల నుండి ఖాతా సృష్టించడాన్ని [[User:$3|$3]] నిషేధించారు. మీ IP చిరునామా ('''$4''') ఈ శ్రేణిలోనే ఉంది.

$3 ఇచ్చిన కారణం: ''$2''",

# History pages
'viewpagelogs' => 'ఈ పేజీకి సంబంధించిన లాగ్‌లను చూడండి',
'nohistory' => 'ఈ పేజీకి మార్పుల చరిత్ర లేదు.',
'currentrev' => 'ప్రస్తుతపు సంచిక',
'currentrev-asof' => '$1 నాటి ప్రస్తుత కూర్పు',
'revisionasof' => '$1 నాటి సంచిక',
'revision-info' => '$1 నాటి కూర్పు. రచయిత: $2',
'previousrevision' => '← పాత కూర్పు',
'nextrevision' => 'దీని తరువాతి సంచిక→',
'currentrevisionlink' => 'ప్రస్తుతపు సంచిక',
'cur' => 'ప్రస్తుత',
'next' => 'తర్వాతి',
'last' => 'గత',
'page_first' => 'మొదటి',
'page_last' => 'చివరి',
'histlegend' => 'తేడా ఎంపిక: సంచికల యొక్క రేడియో బాక్సులను ఎంచుకొని ఎంటర్‌ నొక్కండి, లేదా పైన/ కింద ఉన్న మీటను నొక్కండి.<br />
సూచిక: (ప్రస్తుత) = ప్రస్తుత సంచికతో కల తేడాలు, (గత) = ఇంతకు ముందరి సంచికతో గల తేడాలు, చి = చిన్న మార్పు',
'history-fieldset-title' => 'చరిత్రలో చూడండి',
'history-show-deleted' => 'తొలగించినవి మాత్రమే',
'histfirst' => 'తొట్టతొలి',
'histlast' => 'చిట్టచివరి',
'historysize' => '({{PLURAL:$1|ఒక బైటు|$1 బైట్లు}})',
'historyempty' => '(ఖాళీ)',

# Revision feed
'history-feed-title' => 'కూర్పుల చరిత్ర',
'history-feed-description' => 'ఈ పేజీకి వికీలో కూర్పుల చరిత్ర',
'history-feed-item-nocomment' => '$2 వద్ద ఉన్న $1',
'history-feed-empty' => 'మీరడిగిన పేజీ లేదు.
దాన్ని వికీలోంచి తొలగించి ఉండొచ్చు, లేదా పేరు మార్చి ఉండొచ్చు.
సంబంధిత కొత్త పేజీల కోసం [[Special:Search|వికీలో వెతికి చూడండి]].',

# Revision deletion
'rev-deleted-comment' => '(మార్పుల సంగ్రహాన్ని తొలగించారు)',
'rev-deleted-user' => '(వాడుకరి పేరుని తొలగించారు)',
'rev-deleted-event' => '(దినచర్యని తొలగించాం)',
'rev-deleted-user-contribs' => '[వాడుకరిపేరు లేదా ఐపీ చిరునామాని తొలగించారు  - మార్పుచేర్పుల నుండి మార్పుని దాచారు]',
'rev-deleted-text-permission' => "ఈ పేజీ కూర్పుని '''తొలగించారు'''.
[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} తొలగింపు చిట్టా]లో పూర్తి వివరాలు ఉండవచ్చు.",
'rev-deleted-text-unhide' => "పేజీ యొక్క ఈ కూర్పును '''తొలగించాం'''.
[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} తొలగింపు చిట్టా]లో వివరాలు చూడవచ్చు.
మీరు కావాలనుకుంటే, [$1 ఈ కూర్పుని చూడవచ్చు].",
'rev-suppressed-text-unhide' => "ఈ పేజీకూర్పును '''అణచి పెట్టాం'''.
[{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} అణచివేత చిట్టా]లో వివరాలు చూడవచ్చు.
ముందుకు సాగాలనుకుంటే [$1 కూర్పును చూడవచ్చు].",
'rev-deleted-text-view' => 'ఈ పేజీ కూర్పుని <strong>తొలగించారు</strong>
మీరు దాన్ని చూడవచ్చు; [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} తొలగింపు చిట్టా]లో వివరాలు దొరుకుతాయి.',
'rev-suppressed-text-view' => 'ఈ పేజీకూర్పును <strong>అణచి పెట్టాం</strong>.
మీరు దాన్ని చూడవచ్చు; [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} అణచివేత చిట్టా]లోవివరాలు ఉంటాయి.',
'rev-deleted-no-diff' => "మీరు తేడాలను చూడలేదు ఎందుకంటే ఒక కూర్పుని '''తొలగించారు'''.
[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} తొలగింపు చిట్టా]లో వివరాలు ఉండవచ్చు.",
'rev-suppressed-no-diff' => "ఈ తేడాని మీరు చూడలేరు ఎందుకంటే ఒక కూర్పుని '''తొలగించారు'''.",
'rev-deleted-unhide-diff' => 'ఈ తేడాల యొక్క కూర్పులలో ఒకదాన్ని <strong>తొలగించారు</strong>.
[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} తొలగింపు చిట్టా]లో వివరాలు ఉంటాయి.
మీరు కావాలనుకుంటే [$1 ఈ తేడాని చూడవచ్చు].',
'rev-suppressed-unhide-diff' => 'ఈ తేడా లోని ఒక కూర్పును <strong>అణచి పెట్టాం</strong>.
[{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} అణచివేత చిట్టా]లోవివరాలు ఉంటాయి. 
కావాలనుకుంటే, మీరు [$1 ఈ తేడాను చూడవచ్చు].',
'rev-deleted-diff-view' => 'ఈ తేడా లోని ఒక పేజీకూర్పును <strong>తొలగించాం</strong>.
మీరు ఈ తేడాను చూడవచ్చు; [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} తొలగింపు చిట్టా]లోవివరాలు ఉంటాయి.',
'rev-suppressed-diff-view' => 'ఈ తేడా లోని ఒక కూర్పును <strong>అణచి పెట్టాం</strong>.
మీరు ఈ తేడాను చూడవచ్చు; [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} అణచివేత చిట్టా]లోవివరాలు ఉంటాయి.',
'rev-delundel' => 'చూపించు/దాచు',
'rev-showdeleted' => 'చూపించు',
'revisiondelete' => 'కూర్పులను తొలగించు/తొలగింపును రద్దుచెయ్యి',
'revdelete-nooldid-title' => 'తప్పుడు లక్ష్యపు కూర్పు',
'revdelete-nooldid-text' => 'ఈ పని ఏ కూర్పు లేదా కూర్పుల మీద చెయ్యాలో మీరు సూచించలేదు, లేదా మీరు సూచించిన కూర్పు లేదు, లేదా ప్రస్తుత కూర్పునే దాచాలని ప్రయత్నిస్తున్నారు.',
'revdelete-no-file' => 'ఆ పేర్కొన్న ఫైలు ఉనికిలో లేదు.',
'revdelete-show-file-confirm' => 'మీరు నిజంగానే "<nowiki>$1</nowiki>"  ఫైలు యొక్క $2 $3 నాటి తొలగించిన కూర్పుని చూడాలనుకుంటున్నారా?',
'revdelete-show-file-submit' => 'అవును',
'revdelete-selected' => "'''[[:$1]] యొక్క {{PLURAL:$2|ఎంచుకున్న కూర్పు|ఎంచుకున్న కూర్పులు}}:'''",
'logdelete-selected' => "'''{{PLURAL:$1|ఎంచుకున్న చిట్టా ఘటన|ఎంచుకున్న చిట్టా ఘటనలు}}:'''",
'revdelete-text' => "'''తొలగించిన కూర్పులు, ఘటనలూ పేజీ చరితం లోనూ, చిట్టాలలోనూ కనిపిస్తాయి, కానీ వాటిలో కొన్ని భాగాలు సార్వజనికంగా అందుబాటులో ఉండవు.'''
{{SITENAME}} లోని ఇతర నిర్వాహకులు ఆ దాచిన భాగాలను చూడగలరు మరియు (ఏవిధమైన నియంత్రణలూ లేకుంటే) ఇదే అంతరవర్తి ద్వారా వాటిని పునస్థాపించగలరు.",
'revdelete-confirm' => 'మీరు దీన్ని చేయగోరుతున్నారనీ, దీని పర్యవసానాలు మీకు తెలుసుననీ, మరియు మీరు దీన్ని [[{{MediaWiki:Policy-url}}|విధానం]] ప్రకారమే చేస్తున్నారనీ దయచేసి నిర్ధారించండి.',
'revdelete-suppress-text' => 'అణచివేతను కింది సందర్భాలలో <strong>మాత్రమే</strong> వాడాలి:
* బురదజల్లే ధోరణిలో ఉన్న సమాచారం
* అనుచితమైన వ్యక్తిగత సమాచారం
*<em>ఇంటి చిరునామాలు, టెలిఫోను నంబర్లు, జాతీయ ఐడీ నంబర్లు, వగైరాలు</em>',
'revdelete-legend' => 'సందర్శక నిబంధనలు అమర్చు',
'revdelete-hide-text' => 'పునఃపరిశీలన పాఠ్యం',
'revdelete-hide-image' => 'ఫైలులోని విషయాన్ని దాచు',
'revdelete-hide-name' => 'చర్యను, లక్ష్యాన్నీ దాచు',
'revdelete-hide-comment' => 'దిద్దుబాటు సారాంశం',
'revdelete-hide-user' => 'దిద్దుబాటు చేసినవారి వాడుకరి పేరు/ఐపీ చిరునామా',
'revdelete-hide-restricted' => 'డేటాను అందరిలాగే నిర్వాహకులకు కూడా కనబడనివ్వకు',
'revdelete-radio-same' => '(మార్చకు)',
'revdelete-radio-set' => 'దాచిన',
'revdelete-radio-unset' => 'చూపిన',
'revdelete-suppress' => 'డేటాను అందరిలాగే నిర్వాహకులకు కూడా కనబడనివ్వకు',
'revdelete-unsuppress' => 'పునస్థాపిత కూర్పులపై నిబంధనలను తీసివెయ్యి',
'revdelete-log' => 'కారణం:',
'revdelete-submit' => 'ఎంచుకున్న {{PLURAL:$1|కూర్పుకు|కూర్పులకు}} ఆపాదించు',
'revdelete-success' => "'''కూర్పు కనబడే విధానాన్ని జయప్రదంగా తాజాకరించాం.'''",
'revdelete-failure' => "'''కూర్పు కనబడే పద్ధతిని తాజాపరచలేకపోయాం:'''
$1",
'logdelete-success' => "'''ఘటన కనబడే విధానాన్ని జయప్రదంగా సెట్ చేసాం.'''",
'logdelete-failure' => "'''చిట్టా కనబడే పద్ధతిని అమర్చలేకపోయాం:'''
$1",
'revdel-restore' => 'దృశ్యతని మార్చు',
'pagehist' => 'పేజీ చరిత్ర',
'deletedhist' => 'తొలగించిన చరిత్ర',
'revdelete-hide-current' => '$2, $1 నాటి అంశాన్ని దాచడంలో లోపం దొర్లింది: ఇది ప్రస్తుత కూర్పు.
దీన్ని దాచలేము.',
'revdelete-show-no-access' => '$2, $1 నాటి అంశాన్ని చూపడంలో లోపం దొర్లింది: ఇది "నిరోధించబడింది" అని గుర్తించబడింది.
ఇది మీకు అందుబాటులో లేదు.',
'revdelete-modify-no-access' => '$2, $1 నాటి అంశాన్ని మార్చడంలో లోపం దొర్లింది: ఇది "నిరోధించబడింది" అని గుర్తించబడింది.
ఇది మీకు అందుబాటులో లేదు.',
'revdelete-modify-missing' => '$1 అంశాన్ని మార్చడంలో లోపం దొర్లింది: ఇది డేటాబేసులో కనబడలేదు!',
'revdelete-no-change' => "'''హెచ్చరిక:''' $2, $1 నాటి అంశానికి మీరడిగిన చూపు అమరికలన్నీ ఈసరికే ఉన్నాయి.",
'revdelete-concurrent-change' => '$2, $1 నాటి అంశాన్ని మార్చడంలో లోపం దొర్లింది: మీరు మార్చడానికి ప్రయత్నించిన సమయంలోనే వేరొకరు దాని స్థితిని మార్చినట్లుగా కనిపిస్తోంది. ఓసారి లాగ్‌లను చూడండి.',
'revdelete-only-restricted' => '$2, $1 తేదీ గల అంశాన్ని దాచడంలో పొరపాటు: ఇతర దృశ్యత వికల్పాల్లోంచి ఒకదాన్ని ఎంచుకోకుండా అంశాలని నిర్వాహకులకు కనబడకుండా అణచివెయ్యలేరు.',
'revdelete-reason-dropdown' => '*సాధారణ తొలగింపు కారణాలు
** కాపీహక్కుల ఉల్లంఘన
** అసంబద్ధ వ్యాఖ్య లేదా వ్యక్తిగత సమాచారం
** అసంబద్ధ వాడుకరి పేరు
** నిందాపూర్వక సమాచారం',
'revdelete-otherreason' => 'ఇతర/అదనపు కారణం:',
'revdelete-reasonotherlist' => 'ఇతర కారణం',
'revdelete-edit-reasonlist' => 'తొలగింపు కారణాలని మార్చండి',
'revdelete-offender' => 'కూర్పు రచయిత:',

# Suppression log
'suppressionlog' => 'అణచివేతల చిట్టా',
'suppressionlogtext' => 'నిర్వాహకులకు కనబడని విషయం కలిగిన తొలగింపులు, నిరోధాల జాబితా ఇది.
ప్రస్తుతం అమల్లో ఉన్న నిషేధాలు, నిరోధాల కోసం [[Special:BlockList|నిరోధాల జాబితా]] చూడండి.',

# History merging
'mergehistory' => 'పేజీ చరితాలను విలీనం చెయ్యి',
'mergehistory-header' => 'ఓ పేజీ చరితం లోని కూర్పులను మరో పేజీలోకి విలీనం చెయ్యడానికి ఈ పేజీని వాడండి.
మీరు చెయ్యబోయే మార్పు చరితం క్రమాన్ని పాటిస్తుందని నిర్ధారించుకోండి.',
'mergehistory-box' => 'రెండు పేజీల కూర్పులను విలీనం చెయ్యి:',
'mergehistory-from' => 'మూల పేజీ:',
'mergehistory-into' => 'లక్ష్యిత పేజీ:',
'mergehistory-list' => 'విలీనం చెయ్యదగ్గ దిద్దుబాటు చరితం',
'mergehistory-merge' => '[[:$1]] యొక్క కింది కూర్పులను [[:$2]] తో విలీనం చెయ్యవచ్చు. ఫలానా సమయమూ, దాని కంటే ముందూ తయారైన కూర్పులతో మాత్రమే విలీనం చెయ్యాలనుకుంటే, సంబంధిత రేడియో బటనున్న నిలువు వరుసను వాడండి. నేవిగేషను లింకులను వాడితే ఈ వరుస రీసెట్ అవుతుంది.',
'mergehistory-go' => 'విలీనం చెయ్యదగ్గ దిద్దుబాట్లను చూపించు',
'mergehistory-submit' => 'కూర్పులను విలీనం చెయ్యి',
'mergehistory-empty' => 'ఏ కూర్పులనూ విలీనం చెయ్యలేము.',
'mergehistory-success' => '[[:$1]] యొక్క $3 {{PLURAL:$3|కూర్పుని|కూర్పులను}} [[:$2]] లోనికి జయప్రదంగా విలీనం చేసాం.',
'mergehistory-fail' => 'చరితాన్ని విలీనం చెయ్యలేకపోయాం. పేజీని, సమయాలను సరిచూసుకోండి.',
'mergehistory-no-source' => 'మూలం పేజీ, $1 లేదు.',
'mergehistory-no-destination' => 'గమ్యం పేజీ, $1 లేదు.',
'mergehistory-invalid-source' => 'మూలం పేజీకి సరైన పేరు ఉండాలి.',
'mergehistory-invalid-destination' => 'గమ్యం పేజీకి సరైన పేరు ఉండాలి.',
'mergehistory-autocomment' => '[[:$1]]ని [[:$2]] లోనికి విలీనం చేసారు',
'mergehistory-comment' => '[[:$1]]ని [[:$2]] లోనికి విలీనం చేసారు: $3',
'mergehistory-same-destination' => 'మూల మరియు గమ్యస్థాన పేజీలు ఒకటే కాకూడదు',
'mergehistory-reason' => 'కారణం:',

# Merge log
'mergelog' => 'వీలీనాల చిట్టా',
'pagemerge-logentry' => '[[$1]] ను [[$2]] లోకి విలీనం చేసాం ($3 కూర్పు దాకా)',
'revertmerge' => 'విలీనాన్ని రద్దుచెయ్యి',
'mergelogpagetext' => 'ఒక పేజీ చరితాన్ని మరో పేజీ చరితం లోకి ఇటీవల చేసిన విలీనాల జాబితా ఇది.',

# Diffs
'history-title' => '"$1" యొక్క కూర్పుల చరిత్ర',
'difference-title' => '"$1" యొక్క తిరిగిచూపుల నడుమ తేడాలు',
'difference-title-multipage' => '"$1" మరియు "$2" పేజీల మధ్య తేడా',
'difference-multipage' => '(పేజీల మధ్య తేడా)',
'lineno' => 'పంక్తి $1:',
'compareselectedversions' => 'ఎంచుకున్న సంచికలను పోల్చిచూడు',
'showhideselectedversions' => 'ఎంచుకున్న కూర్పులను చూపించు/దాచు',
'editundo' => 'మార్పుని రద్దుచెయ్యి',
'diff-empty' => '(తేడా లేదు)',
'diff-multi-sameuser' => '(ఇదే వాడుకరి యొక్క {{PLURAL:$1|ఒక మధ్యంతర కూర్పును|$1 మధ్యంతర కూర్పులను}} చూపించలేదు)',
'diff-multi-otherusers' => '({{PLURAL:$2|మరో వాడుకరి|$2 వాడుకరుల}} యొక్క {{PLURAL:$1|ఒక మధ్యంతర కూర్పును|$1 మధ్యంతర కూర్పులను}} చూపించలేదు)',
'diff-multi-manyusers' => '$2 మంది పైన ({{PLURAL:$2|ఒక వాడుకరి|వాడుకరుల}} యొక్క {{PLURAL:$1|ఒక మధ్యంతర కూర్పును|$1 మధ్యంతర కూర్పులను}} చూపించట్లేదు)',
'difference-missing-revision' => 'ఈ తేడా ($1) యొక్క {{PLURAL:$2|ఒక కూర్పు|$2 కూర్పులు}} {{PLURAL:$2|కనబడలేదు}}.

సాధారణంగా, తొలగించబడిన పేజీ యొక్క కాలం చెల్లిన ’తేడా’ లింకును నొక్కినపుడు ఇది జరుగుతుంది. 
[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} తొలగింపు లాగ్] లో వివరాలు ఉంటాయి.',

# Search results
'searchresults' => 'వెదుకులాట ఫలితాలు',
'searchresults-title' => '"$1"కి అన్వేషణ ఫలితాలు',
'toomanymatches' => 'చాలా పోలికలు వచ్చాయి, దయచేసి మరో ప్రశ్నని ప్రయత్నించండి',
'titlematches' => 'వ్యాస శీర్షిక సరిపోయింది',
'textmatches' => 'పేజిలోని పాఠం సరిపోలింది',
'notextmatches' => 'పేజీ పాఠ్యమేదీ సరిపోలడం లేదు',
'prevn' => 'క్రితం {{PLURAL:$1|$1}}',
'nextn' => 'తరువాతి {{PLURAL:$1|$1}}',
'prevn-title' => 'గత $1 {{PLURAL:$1|ఫలితం|ఫలితాలు}}',
'nextn-title' => 'తదుపరి $1 {{PLURAL:$1|ఫలితం|ఫలితాలు}}',
'shown-title' => 'పేజీకి $1 {{PLURAL:$1|ఫలితాన్ని|ఫలితాలను}} చూపించు',
'viewprevnext' => '($1 {{int:pipe-separator}} $2) ($3) చూపించు.',
'searchmenu-exists' => "'''ఈ వికీలో \"[[:\$1]]\" అనే పేజీ ఉంది'''",
'searchmenu-new' => '<strong>ఈ వికీలో "[[:$1]]" అనే పేరుతో పేజీని సృష్టించండి!</strong> {{PLURAL:$2|0=|మీ వెతుకులాటలో దొరికిన పేజీని కూడా చూడండి.|వెతుకులాట ఫలితాలను కూడా చూడండి.}}',
'searchprofile-articles' => 'విషయపు పేజీలు',
'searchprofile-project' => 'సహాయం మరియు ప్రాజెక్టు పేజీలు',
'searchprofile-images' => 'బహుళమాధ్యమాలు',
'searchprofile-everything' => 'ప్రతీ ఒక్కటీ',
'searchprofile-advanced' => 'ఉన్నత',
'searchprofile-articles-tooltip' => '$1 లలో వెతకండి',
'searchprofile-project-tooltip' => '$1 లలో వెతకండి',
'searchprofile-images-tooltip' => 'పైళ్ళ కోసం వెతకండి',
'searchprofile-everything-tooltip' => 'అన్ని చోట్లా (చర్చా పేజీలతో సహా) వెతకండి',
'searchprofile-advanced-tooltip' => 'కస్టం నేంస్పేసులలో వెదుకు',
'search-result-size' => '$1 ({{PLURAL:$2|1 పదం|$2 పదాలు}})',
'search-result-category-size' => '{{PLURAL:$1|1 సభ్యుడు|$1 సభ్యులు}} ({{PLURAL:$2|1 ఉవవర్గం|$2 ఉపవర్గాలు}}, {{PLURAL:$3|1 దస్త్రం|$3 దస్త్రాలు}})',
'search-result-score' => 'సంబంధం: $1%',
'search-redirect' => '(దారిమార్పు $1)',
'search-section' => '(విభాగం $1)',
'search-file-match' => '(ఫైలు విషయంతో సరిపోలుతోంది)',
'search-suggest' => 'మీరు అంటున్నది ఇదా: $1',
'search-interwiki-caption' => 'సోదర ప్రాజెక్టులు',
'search-interwiki-default' => '$1 ఫలితాలు:',
'search-interwiki-more' => '(మరిన్ని)',
'search-relatedarticle' => 'సంబంధించినవి',
'searcheverything-enable' => 'అన్ని పేరుబరుల్లో వెతుకు',
'searchrelated' => 'సంబంధించినవి',
'searchall' => 'అన్నీ',
'showingresults' => "కింద ఉన్న {{PLURAL:$1|'''ఒక్క''' ఫలితం|'''$1''' ఫలితాలు}}, #'''$2''' నుండి మొదలుకొని చూపిస్తున్నాం.",
'showingresultsnum' => "కింద ఉన్న {{PLURAL:$3|'''ఒక్క''' ఫలితం|'''$3''' ఫలితాలు}}, #'''$2''' నుండి మొదలుకొని చూపిస్తున్నాం.",
'showingresultsheader' => "'''$4''' కొరకై {{PLURAL:$5|'''$3'''లో '''$1''' ఫలితం|'''$3''' ఫలితాల్లో '''$1 - $2''' వరకు}}",
'search-nonefound' => 'మీ ప్రశ్నకి సరిపోలిన ఫలితాలేమీ లేవు.',
'powersearch-legend' => 'నిశితమైన అన్వేషణ',
'powersearch-ns' => 'ఈ పేరుబరుల్లో వెతుకు:',
'powersearch-redir' => 'దారిమార్పులను చూపించు',
'powersearch-togglelabel' => 'ఎంచుకోవాల్సినవి:',
'powersearch-toggleall' => 'అన్నీ',
'powersearch-togglenone' => 'ఏదీకాదు',
'search-external' => 'బయటి అన్వేషణ',
'searchdisabled' => '{{SITENAME}} అన్వేషణ తాత్కాలికంగా పని చెయ్యడం లేదు. ఈలోగా మీరు గూగుల్‌ ఉపయోగించి అన్వేషించవచ్చు. ఒక గమనిక: గూగుల్‌ ద్వారా కాలదోషం పట్టిన ఫలితాలు రావడానికి అవకాశం ఉంది.',
'search-error' => '$1 కోసం వెతికేటపుడు లోపమేదో దొర్లింది.',

# Preferences page
'preferences' => 'అభిరుచులు',
'mypreferences' => 'అభిరుచులు',
'prefs-edits' => 'దిద్దుబాట్ల సంఖ్య:',
'prefsnologintext2' => 'మీ అభిరుచులను మార్చుకునేందుకు $1.',
'prefs-skin' => 'అలంకారం',
'skin-preview' => 'మునుజూపు/సరిచూడు',
'datedefault' => 'ఏదైనా పరవాలేదు',
'prefs-beta' => 'బీటా సౌలభ్యాలు',
'prefs-datetime' => 'తేదీ, సమయం',
'prefs-labs' => 'ప్రయోగాత్మక సౌలభ్యాలు',
'prefs-user-pages' => 'వాడుకరి పేజీలు',
'prefs-personal' => 'వాడుకరి వివరాలు',
'prefs-rc' => 'ఇటీవలి మార్పులు',
'prefs-watchlist' => 'వీక్షణ జాబితా',
'prefs-watchlist-days' => 'వీక్షణ జాబితాలో చూపించవలసిన రోజులు:',
'prefs-watchlist-days-max' => '$1 {{PLURAL:$1|రోజు|రోజులు}} గరిష్ఠం',
'prefs-watchlist-edits' => 'విస్తృత వీక్షణ జాబితాలో చూపించవలసిన దిద్దుబాట్లు:',
'prefs-watchlist-edits-max' => 'గరిష్ఠ సంఖ్య: 1000',
'prefs-watchlist-token' => 'వీక్షణాజాబితా టోకెను:',
'prefs-misc' => 'ఇతరాలు',
'prefs-resetpass' => 'సంకేతపదాన్ని మార్చుకోండి',
'prefs-changeemail' => 'ఈ-మెయిలు చిరునామా మార్పు',
'prefs-setemail' => 'ఒక ఈ-మెయిల్ చిరునామాని అమర్చండి',
'prefs-email' => 'ఈ-మెయిల్ ఎంపికలు',
'prefs-rendering' => 'రూపురేఖలు',
'saveprefs' => 'భద్రపరచు',
'restoreprefs' => 'అప్రమేయ అమరికలను పునఃస్థాపించు (అన్ని విభాగాల్లోనూ)',
'prefs-editing' => 'మార్పులు',
'rows' => 'వరుసలు',
'columns' => 'వరుసలు:',
'searchresultshead' => 'అన్వేషణ',
'stub-threshold' => '<a href="#" class="stub">మొలక లింకు</a> ఫార్మాటింగు కొరకు హద్దు (బైట్లు):',
'stub-threshold-disabled' => 'అచేతనం',
'recentchangesdays' => 'ఇటీవలి మార్పులు లో చూపించవలసిన రోజులు:',
'recentchangesdays-max' => '($1 {{PLURAL:$1|రోజు|రోజులు}} గరిష్ఠం)',
'recentchangescount' => 'అప్రమేయంగా చూపించాల్సిన దిద్దుబాట్ల సంఖ్య:',
'prefs-help-recentchangescount' => 'ఇది ఇటీవలి మార్పులు, పేజీ చరిత్రలు, మరియు చిట్టాలకు వర్తిస్తుంది.',
'prefs-help-watchlist-token2' => 'మీ వీక్షణజాబితా యొక్క జాలవడ్డింపుకు చెందిన రహస్య తాళమిది.
ఈ తాళం తెలిసిన ఎవరైనా మీ వీక్షణజాబితాను చదవగలుగుతారు. అందుచేత దీన్ని ఎవరికీ ఇవ్వకండి.
[[Special:ResetTokens|దాన్ని మార్చాలంటే ఇక్కడ నొక్కండి]].',
'savedprefs' => 'మీ అభిరుచులను భద్రపరిచాం.',
'timezonelegend' => 'కాల మండలం:',
'localtime' => 'స్థానిక సమయం:',
'timezoneuseserverdefault' => 'వికీ అప్రమేయాన్ని ఉపయోగించు ($1)',
'timezoneuseoffset' => 'ఇతర (భేదాన్ని ఇవ్వండి)',
'servertime' => 'సర్వరు సమయం:',
'guesstimezone' => 'విహారిణి నుండి తీసుకో',
'timezoneregion-africa' => 'ఆఫ్రికా',
'timezoneregion-america' => 'అమెరికా',
'timezoneregion-antarctica' => 'అంటార్కిటికా',
'timezoneregion-arctic' => 'ఆర్కిటిక్',
'timezoneregion-asia' => 'ఆసియా',
'timezoneregion-atlantic' => 'అట్లాంటిక్ మహాసముద్రం',
'timezoneregion-australia' => 'ఆష్ట్రేలియా',
'timezoneregion-europe' => 'ఐరోపా',
'timezoneregion-indian' => 'హిందూ మహాసముద్రం',
'timezoneregion-pacific' => 'పసిఫిక్ మహాసముద్రం',
'allowemail' => 'ఇతర వాడుకరుల నుండి ఈ-మెయిళ్ళను రానివ్వు',
'prefs-searchoptions' => 'వెతుకులాట',
'prefs-namespaces' => 'పేరుబరులు',
'defaultns' => 'లేకపోతే ఈ నేంస్పేసులలో అన్వేషించు:',
'default' => 'అప్రమేయం',
'prefs-files' => 'ఫైళ్ళు',
'prefs-custom-css' => 'ప్రత్యేక CSS',
'prefs-custom-js' => 'ప్రత్యేక JS',
'prefs-common-css-js' => 'అన్ని అలంకారాలకై పంచుకోబడిన CSS/JS:',
'prefs-reset-intro' => 'ఈ పేజీలో, మీ అభిరుచులను సైటు డిఫాల్టు విలువలకు మార్చుకోవచ్చు. మళ్ళీ వెనక్కి తీసుకుపోలేరు.',
'prefs-emailconfirm-label' => 'ఈ-మెయిల్ నిర్ధారణ:',
'youremail' => 'మీ ఈ-మెయిలు*',
'username' => '{{GENDER:$1|వాడుకరి పేరు}}:',
'uid' => '{{GENDER:$1|వాడుకరి}} ID:',
'prefs-memberingroups' => 'ఈ {{PLURAL:$1|గుంపులో|గుంపులలో}} {{GENDER:$2|సభ్యుడు|సభ్యురాలు}}:',
'prefs-registration' => 'నమోదైన సమయం:',
'yourrealname' => 'అసలు పేరు:',
'yourlanguage' => 'భాష:',
'yourvariant' => 'విషయపు భాషా వైవిధ్యం:',
'prefs-help-variant' => 'ఈ వికీ లోని విషయపు పేజీలను చూపించడానికి మీ అభిమత వైవిధ్యం లేదా ఆర్ధోగ్రఫీ.',
'yournick' => 'ముద్దు పేరు',
'prefs-help-signature' => 'చర్చా పేజీల లోని వ్యాఖ్యలకు "<nowiki>~~~~</nowiki>"తో సంతకం చేస్తే అది మీ సంతకం మరియు కాలముద్రగా మారుతుంది.',
'badsig' => 'సంతకాన్ని సరిగ్గా ఇవ్వలేదు; HTML ట్యాగులను ఒకసారి పరిశీలించండి.',
'badsiglength' => 'మీ సంతకం చాలా పెద్దగా ఉంది.
ఇది తప్పనిసరిగా $1 {{PLURAL:$1|అక్షరం|అక్షరాల}} లోపులోనే ఉండాలి.',
'yourgender' => 'మిమ్మల్ని ఎలా సంబోధించడానికి ఇష్టపడతారు?',
'gender-unknown' => 'వెల్లడించడానికి నేను ఇష్టపడట్లేదు',
'gender-male' => 'అతను వికీ పేజీలను సరిదిద్దుతాడు',
'gender-female' => 'ఆమె వికీ పేజీలను సరిదిద్దుతుంది',
'prefs-help-gender' => 'ఈ అభిరుచిని అమర్చుకోవడం ఐచ్చికం.
మిమ్మల్ని సంబోధించేప్పుడూ మిమ్మల్ని పేర్కొనేప్పుడూ వ్యాకరణపరంగా సరైన లింగాన్ని  వాడటానికి ఈ విలువ ఉపయోగపడుతుంది.
ఈ సమాచారం బహిరంగం.',
'email' => 'ఈ-మెయిలు',
'prefs-help-realname' => 'అసలు పేరు (తప్పనిసరి కాదు), మీ అసలు పేరు ఇస్తేగనక, మీ రచనలన్నీ మీ అసలు పేరుతోనే గుర్తిస్తూ ఉంటారు.',
'prefs-help-email' => 'ఈ-మెయిలు చిరునామా ఐచ్చికం, కానీ మీరు సంకేతపదాన్ని మర్చిపోతే కొత్త సంకేతపదాన్ని మీకు పంపించడానికి అవసరమవుతుంది.',
'prefs-help-email-others' => 'మీ వాడుకరి లేదా చర్చా పేజీలలో ఉండే లంకె ద్వారా ఇతరులు మిమ్మల్ని ఈ-మెయిలు ద్వారా సంప్రదించే వీలుకల్పించవచ్చు.
ఇతరులు మిమ్మల్ని సంప్రదించినప్పుడు మీ ఈ-మెయిలు చిరునామా బహిర్గతమవదు.',
'prefs-help-email-required' => 'ఈ-మెయిలు చిరునామా తప్పనిసరి.',
'prefs-info' => 'ప్రాథమిక సమాచారం',
'prefs-i18n' => 'అంతర్జాతీకరణ',
'prefs-signature' => 'సంతకం',
'prefs-dateformat' => 'తేదీ ఆకృతి',
'prefs-timeoffset' => 'సమయ సవరణ',
'prefs-advancedediting' => 'సాధారణ ఎంపికలు',
'prefs-editor' => 'కూర్పరి',
'prefs-preview' => 'మునుజూపు',
'prefs-advancedrc' => 'ఉన్నత ఎంపికలు',
'prefs-advancedrendering' => 'ఉన్నత ఎంపికలు',
'prefs-advancedsearchoptions' => 'ఉన్నత ఎంపికలు',
'prefs-advancedwatchlist' => 'ఉన్నత ఎంపికలు',
'prefs-displayrc' => 'ప్రదర్శన ఎంపికలు',
'prefs-displaysearchoptions' => 'ప్రదర్శన ఎంపికలు',
'prefs-displaywatchlist' => 'ప్రదర్శన ఎంపికలు',
'prefs-tokenwatchlist' => 'టోకెన్',
'prefs-diffs' => 'తేడాలు',
'prefs-help-prefershttps' => 'ఈ అభిరుచి మీరు పైసారి లాగినైనపుడు అమలౌతుంది.',
'prefs-tabs-navigation-hint' => 'చిట్కా: ట్యాబుల జాబితాలో ఓ ట్యాబు నుండి మరోదానికి వెళ్ళేందుకు కుడి ఎడమ బాణాల కీలను వాడవచ్చు.',

# User preference: email validation using jQuery
'email-address-validity-valid' => 'ఈ-మెయిలు చిరునామా సరిగానే ఉన్నట్టుంది',
'email-address-validity-invalid' => 'దయచేసి సరైన ఈమెయిలు చిరునామాని ఇవ్వండి',

# User rights
'userrights' => 'వాడుకరి హక్కుల నిర్వహణ',
'userrights-lookup-user' => 'వాడుకరి సమూహాలను సంభాళించండి',
'userrights-user-editname' => 'సభ్యనామాన్ని ఇవ్వండి:',
'editusergroup' => 'వాడుకరి గుంపులను మార్చు',
'editinguser' => "వాడుకరి '''[[User:$1|$1]]''' $2 యొక్క వాడుకరి హక్కులను మారుస్తున్నారు",
'userrights-editusergroup' => 'వాడుకరి సమూహాలను మార్చండి',
'saveusergroups' => 'వాడుకరి గుంపులను భద్రపరచు',
'userrights-groupsmember' => 'సభ్యులు:',
'userrights-groupsmember-auto' => 'సంభావిత సభ్యులు:',
'userrights-groups-help' => 'ఈ వాడుకరి ఏయే గుంపులలో ఉండవచ్చో మీరు మార్చవచ్చు.
* టిక్కు పెట్టివుంటే ఆ గుంపులో ఈ వాడుకరి ఉన్నట్టు.
* టిక్కు లేకుంటే ఆ గుంపులో ఈ వాడుకరి లేనట్టు.
* <nowiki>*</nowiki> ఉంటే ఒకసారి ఆ గుంపుని చేర్చాకా మీరు తీసివేయలేరు, లేదా తీసివేసాకా తిరిగి చేర్చలేరు.',
'userrights-reason' => 'కారణం:',
'userrights-no-interwiki' => 'ఇతర వికీలలో వాడుకరి హక్కులను మార్చడానికి మీకు అనుమతి లేదు.',
'userrights-nodatabase' => '$1 అనే డేటాబేసు లేదు లేదా అది స్థానికం కాదు.',
'userrights-nologin' => 'వాడుకరి హక్కులను ఇవ్వడానికి మీరు తప్పనిసరిగా ఓ నిర్వాహక ఖాతాతో [[Special:UserLogin|లోనికి ప్రవేశించాలి]].',
'userrights-notallowed' => 'వాడుకరి హక్కులను చేర్చే మరియు తొలగించే అనుమతి మీకు లేదు.',
'userrights-changeable-col' => 'మీరు మార్చదగిన గుంపులు',
'userrights-unchangeable-col' => 'మీరు మార్చలేని గుంపులు',
'userrights-conflict' => 'వాడుకరి హక్కుల మార్పులలో ఘర్షణ! మీ మార్పులను సమీక్షించి, నిర్ధారించండి.',
'userrights-removed-self' => 'మీ హక్కులను మీరు విజయవంతంగా తొలగించుకున్నారు. తద్వారా, ఈ పేజీని చూడడానికి మీకు ఇక అనుమతి లేదు.',

# Groups
'group' => 'గుంపు:',
'group-user' => 'వాడుకరులు',
'group-autoconfirmed' => 'ఆటోమాటిగ్గా నిర్ధారించబడిన వాడుకరులు',
'group-bot' => 'బాట్‌లు',
'group-sysop' => 'నిర్వాహకులు',
'group-bureaucrat' => 'అధికారులు',
'group-suppress' => ' పూర్తి తొలగింపుదారులు',
'group-all' => '(అందరూ)',

'group-user-member' => '{{GENDER:$1|వాడుకరి}}',
'group-autoconfirmed-member' => '{{GENDER:$1|ఆటోమాటిగ్గా నిర్ధారించబడిన వాడుకరి}}',
'group-bot-member' => '{{GENDER:$1|బాట్}}',
'group-sysop-member' => '{{GENDER:$1|నిర్వాహకుడు|నిర్వాహకురాలు}}',
'group-bureaucrat-member' => '{{GENDER:$1|అధికారి|అధికారిణి}}',
'group-suppress-member' => 'పూర్తి   తొలగింపు',

'grouppage-user' => '{{ns:project}}:వాడుకరులు',
'grouppage-autoconfirmed' => '{{ns:project}}:ఆటోమాటిగ్గా నిర్ధారించబడిన వాడుకరులు',
'grouppage-bot' => '{{ns:project}}:బాట్లు',
'grouppage-sysop' => '{{ns:project}}:నిర్వాహకులు',
'grouppage-bureaucrat' => '{{ns:project}}:అధికార్లు',
'grouppage-suppress' => '{{ns:project}}:పూర్తి తొలగింపు',

# Rights
'right-read' => 'పేజీలు చదవడం',
'right-edit' => 'పేజీలను మార్చడం',
'right-createpage' => 'పేజీలను సృష్టించడం (చర్చాపేజీలు కానివి)',
'right-createtalk' => 'చర్చా పేజీలను సృష్టించడం',
'right-createaccount' => 'కొత్త వాడుకరి ఖాతాలను సృష్టించడం',
'right-minoredit' => 'మార్పుని చిన్నదిగా గుర్తించడం',
'right-move' => 'పేజీలను తరలించడం',
'right-move-subpages' => 'పేజీలను వాటి ఉపపేజీలతో బాటుగా తరలించడం',
'right-move-rootuserpages' => 'వాడుకరుల ప్రధాన పేజీలను తరలించగలగడం',
'right-movefile' => 'ఫైళ్ళను తరలించడం',
'right-suppressredirect' => 'పేజీని తరలించేటపుడు పాత పేరు నుండి దారిమార్పును సృష్టించకుండా ఉండటం',
'right-upload' => 'దస్త్రాలను ఎక్కించడం',
'right-reupload' => 'ఇప్పటికే ఉన్న ఫైలును తిరగరాయి',
'right-reupload-own' => 'తానే ఇదివరలో అప్‌లోడు చేసిన ఫైలును తిరగరాయి',
'right-reupload-shared' => 'స్థానికంగా ఉమ్మడి మీడియా సొరుగులోని ఫైళ్ళను అధిక్రమించు',
'right-upload_by_url' => 'URL అడ్రసునుండి ఫైలును అప్‌లోడు చెయ్యి',
'right-purge' => 'పేజీకి సంబంధించిన సైటు కాషెను, నిర్ధారణ కోరకుండానే తొలగించు',
'right-autoconfirmed' => 'అర్ధ సంరక్షణలో ఉన్న పేజీలలో దిద్దుబాటు చెయ్యి',
'right-bot' => 'ఆటోమాటిక్ ప్రాసెస్ లాగా భావించబడు',
'right-nominornewtalk' => 'చర్చా పేజీల్లో జరిగిన అతి చిన్న మార్పులకు కొత్తసందేశము వచ్చిందన్న సూచన చెయ్యవద్దు',
'right-apihighlimits' => 'API ప్రశ్నల్లో ఉన్నత పరిమితులను వాడు',
'right-writeapi' => 'రైట్ API వినియోగం',
'right-delete' => 'పేజీలను తొలగించడం',
'right-bigdelete' => 'చాలా పెద్ద చరితం ఉన్న పేజీలను తొలగించు',
'right-deleterevision' => 'పేజీల ప్రత్యేకించిన కూర్పులను తొలగించు, తొలగింపును నివారించు',
'right-deletedhistory' => 'తొలగింపులను, వాటి పాఠ్యం లేకుండా, చరితంలో చూడు',
'right-deletedtext' => 'తొలగించిన పాఠ్యాన్ని మరియు తొలగించిన కూర్పుల మధ్య మార్పలని చూడగలగడం',
'right-browsearchive' => 'తొలగించిన పేజీలను వెతుకు',
'right-undelete' => 'పేజీ తొలగింపును రద్దు చెయ్యి',
'right-suppressrevision' => 'నిర్వాహకులకు కనబడకుండా ఉన్న కూర్పులను సమీక్షించి పౌనస్థాపించు',
'right-suppressionlog' => 'గోప్యంగా ఉన్న లాగ్‌లను చూడు',
'right-block' => 'దిద్దుబాటు చెయ్యకుండా ఇతర వాడుకరులను నిరోధించగలగడం',
'right-blockemail' => 'ఈమెయిలు పంపకుండా సభ్యుని నిరోధించు',
'right-hideuser' => 'ప్రజలకు కనబడకుండా చేసి, సభ్యనామాన్ని నిరోధించు',
'right-ipblock-exempt' => 'ఐపీ నిరోధాలు, ఆటో నిరోధాలు, శ్రేణి నిరోధాలను తప్పించు',
'right-proxyunbannable' => 'ప్రాక్సీల ఆటోమాటిక్ నిరోధాన్ని తప్పించు',
'right-unblockself' => 'వారినే అనిరోధించుకోవడం',
'right-protect' => 'సంరక్షణ స్థాయిలను మార్చు, సంరక్షిత పేజీలలో దిద్దుబాటు చెయ్యి',
'right-editprotected' => '"{{int:protect-level-sysop}}" గా సంక్షించబడిన పేజీలను సరిదిద్దు',
'right-editsemiprotected' => '"{{int:protect-level-autoconfirmed}}" గా సంరక్షించబడ్డ పేజీలను మార్చు',
'right-editinterface' => 'యూజరు ఇంటరుఫేసులో దిద్దుబాటు చెయ్యి',
'right-editusercssjs' => 'ఇతర వాడుకరుల CSS, JS ఫైళ్ళలో దిద్దుబాటు చెయ్యి',
'right-editusercss' => 'ఇతర వాడుకరుల CSS ఫైళ్ళలో దిద్దుబాటు చెయ్యి',
'right-edituserjs' => 'ఇతర వాడుకరుల JS ఫైళ్ళలో దిద్దుబాటు చెయ్యి',
'right-editmyusercss' => 'మీ స్వంత వాడుకరి CSS ఫైళ్ళను సరిదిద్దండి',
'right-editmyuserjs' => 'మీ స్వంత JavaScript దస్త్రాలను మార్చండి',
'right-viewmywatchlist' => 'మీ స్వంత వీక్షణజాబితాను చూడండి',
'right-editmywatchlist' => 'మీ స్వంత వీక్షణజాబితాను మార్చుకోండి. ఈ హక్కు లేకపోయినా, కొన్ని చర్యల ద్వారా పేజీలు జాబితాకు చేరుతాయని గమనించండి.',
'right-viewmyprivateinfo' => 'మీ స్వంత గోపనీయ డేటాను చూడండి (ఉదా: ఈమెయిలు చిరునామా, అసలు పేరు)',
'right-editmyprivateinfo' => 'మీ స్వంత గోపనీయ డేటాను మార్చుకోండి (ఉదా: ఈమెయిలు చిరునామా, అసలు పేరు)',
'right-editmyoptions' => 'మీ స్వంత అభిరుచులను మార్చుకోండి',
'right-rollback' => 'ఒకానొక పేజీలో చివరి దిద్దుబాటు చేసిన వాడుకరి చేసిన దిద్దుబాట్లను రద్దుచేయి',
'right-markbotedits' => 'వెనక్కి తెచ్చిన దిద్దుబాట్లను బాట్ దిద్దుబాట్లుగా గుర్తించు',
'right-noratelimit' => 'రేటు పరిమితులు ప్రభావం చూపవు',
'right-import' => 'ఇతర వికీల నుండి పేజీలను దిగుమతి చేసుకో',
'right-importupload' => 'ఫైలు అప్‌లోడు నుండి పేజీలను దిగుమతి చేసుకో',
'right-patrol' => 'ఇతరుల దిద్దుబాట్లను నిఘాలో ఉన్నట్లుగా గుర్తించు',
'right-autopatrol' => 'తానే చేసిన మార్పులను నిఘాలో ఉన్నట్లుగా ఆటోమాటిగా గుర్తించు',
'right-patrolmarks' => 'ఇటీవలి మార్పుల నిఘా గుర్తింపులను చూడు',
'right-unwatchedpages' => 'వీక్షణలో లేని పేజీల జాబితాను చూడు',
'right-mergehistory' => 'పేజీల యొక్క చరిత్రలని విలీనం చేయగలగడం',
'right-userrights' => 'వాడుకరులందరి హక్కులను మార్చు',
'right-userrights-interwiki' => 'ఇతర వికీల్లోని వాడుకరుల హక్కులను మార్చు',
'right-siteadmin' => 'డేటాబేసును లాక్, అన్‌లాక్ చెయ్యి',
'right-override-export-depth' => '5 లింకుల లోతు వరకు ఉన్న పేజీలతో సహా, పేజీలను ఎగుమతి చెయ్యి',
'right-sendemail' => 'ఇతర వాడుకరులకు ఈ-మెయిలు పంపించగలగడం',
'right-passwordreset' => 'సంకేతపదాన్ని పునరుద్ధరించిన ఈ-మెయిళ్ళు',

# Special:Log/newusers
'newuserlogpage' => 'కొత్త వాడుకరుల చిట్టా',
'newuserlogpagetext' => 'ఇది వాడుకరి నమోదుల చిట్టా.',

# User rights log
'rightslog' => 'వాడుకరుల హక్కుల మార్పుల చిట్టా',
'rightslogtext' => 'ఇది వాడుకరుల హక్కులకు జరిగిన మార్పుల చిట్టా.',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'ఈ పేజీని చదవండి',
'action-edit' => 'ఈ పేజీని సవరించండి',
'action-createpage' => 'పేజీలను సృష్టించే',
'action-createtalk' => 'చర్చాపేజీలను సృష్టించే',
'action-createaccount' => 'ఈ వాడుకరి ఖాతాని సృష్టించే',
'action-minoredit' => 'ఈ మార్పుని చిన్నదానిగా గుర్తించే',
'action-move' => 'ఈ పేజీని తరలించే',
'action-move-subpages' => 'ఈ పేజీని మరియు దీని ఉపపేజీలను తరలించే',
'action-move-rootuserpages' => 'ప్రధాన వాడుకరి పేజీలని తరలించగడగడం',
'action-movefile' => 'ఈ ఫైలుని తరలించే',
'action-upload' => 'ఈ దస్త్రాన్ని ఎక్కించే',
'action-reupload' => 'ఈ ఫైలుని తిరగవ్రాసే',
'action-reupload-shared' => 'సామూహిక నిక్షేపంపై ఈ ఫైలును అతిక్రమించు',
'action-upload_by_url' => 'ఈ ఫైలుని URL చిరునామా నుండి ఎగుమతి చేసే',
'action-writeapi' => 'వ్రాసే APIని ఉపయోగించే',
'action-delete' => 'ఈ పేజీని తొలగించే',
'action-deleterevision' => 'ఈ కూర్పుని తొలగించే',
'action-deletedhistory' => 'ఈ పేజీ యొక్క తొలగించిన చరిత్రని చూసే',
'action-browsearchive' => 'తొలగించిన పేజీలలో వెతికే',
'action-undelete' => 'ఈ పేజీని పునఃస్థాపించే',
'action-suppressrevision' => 'ఈ దాచిన కూర్పుని సమీక్షించి పునఃస్థాపించే',
'action-suppressionlog' => 'ఈ అంతరంగిక చిట్టాను చూసే',
'action-block' => 'ఈ వాడుకరిని మార్పులు చేయడం నుండి నిరోధించే',
'action-protect' => 'ఈ పేజీకి సంరక్షణా స్థాయిని మార్చే',
'action-rollback' => 'ఏదైనా పేజీలో మార్పులు చేసిన చివరి వాడుకరి యొక్క మార్పులను త్వరితంగా వెనక్కి తీసుకెళ్ళు',
'action-import' => 'మరో వికీ నుండి ఈ పేజీని దిగుమతి చెయ్యి',
'action-importupload' => 'ఎగుమతి చేసిన ఫైలు నుండి ఈ పేజీలోనికి దిగుమతి చేసే',
'action-patrol' => 'ఇతరుల మార్పులను పర్యవేక్షించినవిగా గుర్తించే',
'action-autopatrol' => 'మీ మార్పులను పర్యవేక్షించినవిగా గుర్తించే',
'action-unwatchedpages' => 'వీక్షణలో లేని పేజీల జాబితాని చూసే',
'action-mergehistory' => 'ఈ పేజీ యొక్క చరిత్రని విలీనం చేసే',
'action-userrights' => 'అందరు వాడుకరుల హక్కులను మార్చే',
'action-userrights-interwiki' => 'ఇతర వికీలలో వాడుకరుల యొక్క హక్కులను మార్చే',
'action-siteadmin' => 'డాటాబేసుకి తాళం వేసే లేదా తీసే',
'action-sendemail' => 'ఈ-మెయిల్స్ పంపించు',
'action-editmywatchlist' => 'మీ వీక్షణ జాబితాను సరిదిద్దండి',
'action-viewmywatchlist' => 'మీ వీక్షణ జాబితాను చూడండి',
'action-viewmyprivateinfo' => 'మీ గోపనీయ సమాచారాన్ని చూడండి',
'action-editmyprivateinfo' => 'మీ గోపనీయ సమాచారాన్ని సరిదిద్దండి',

# Recent changes
'nchanges' => '{{PLURAL:$1|ఒక మార్పు|$1 మార్పులు}}',
'enhancedrc-since-last-visit' => '$1 {{PLURAL:$1|చివరి దర్శనం నుండి}}',
'enhancedrc-history' => 'చరితం',
'recentchanges' => 'ఇటీవలి మార్పులు',
'recentchanges-legend' => 'ఇటీవలి మార్పుల ఎంపికలు',
'recentchanges-summary' => 'వికీలో ఇటీవలే జరిగిన మార్పులను ఈ పేజీలో గమనించవచ్చు.',
'recentchanges-feed-description' => 'ఈ ఫీడు ద్వారా వికీలో జరుగుతున్న మార్పుల గురించి ఎప్పటికప్పుడు సమాచారాన్ని పొందండి.',
'recentchanges-label-newpage' => 'ఈ మార్పు కొత్త పేజీని సృష్టించింది',
'recentchanges-label-minor' => 'ఇది ఒక చిన్న మార్పు',
'recentchanges-label-bot' => 'ఈ మార్పును ఒక బాటు చేసింది',
'recentchanges-label-unpatrolled' => 'ఈ దిద్దుబాటు మీద నిఘా లేదు',
'recentchanges-label-plusminus' => 'ఈ పేజి పరిమాణంలో  జరిగిన మార్పుల  బైట్ల సంఖ్య',
'recentchanges-legend-heading' => "'''సూచిక :'''",
'recentchanges-legend-newpage' => '([[Special:NewPages|కొత్త పేజీల జాబితా]]ను కూడా చూడండి)',
'rcnotefrom' => '<b>$2</b> నుండి జరిగిన మార్పులు (<b>$1</b> వరకు చూపబడ్డాయి).',
'rclistfrom' => '$1 నుండి జరిగిన మార్పులను చూపించు',
'rcshowhideminor' => 'చిన్న మార్పులను $1',
'rcshowhidebots' => 'బాట్లను $1',
'rcshowhideliu' => 'నమోదైన వాడుకరులను $1',
'rcshowhideanons' => 'అజ్ఞాత వాడుకరులను $1',
'rcshowhidepatr' => 'నిఘాలో ఉన్న మార్పులను $1',
'rcshowhidemine' => 'నా మార్పులను $1',
'rclinks' => 'గత  $2 రోజుల లోని చివరి $1 మార్పులను చూపించు <br />$3',
'diff' => 'తేడాలు',
'hist' => 'చరిత్ర',
'hide' => 'దాచు',
'show' => 'చూపించు',
'minoreditletter' => 'చి',
'newpageletter' => 'కొ',
'boteditletter' => 'బా',
'number_of_watching_users_pageview' => '[వీక్షిస్తున్న సభ్యులు: {{PLURAL:$1|ఒక్కరు|$1}}]',
'rc_categories' => 'ఈ వర్గాలకు పరిమితం చెయ్యి ("|" తో వేరు చెయ్యండి)',
'rc_categories_any' => 'ఏదయినా',
'rc-change-size-new' => 'మార్పు తర్వాత $1 {{PLURAL:$1|బైటు|బైట్లు}}',
'newsectionsummary' => '/* $1 */ కొత్త విభాగం',
'rc-enhanced-expand' => 'వివరాలను చూపించు',
'rc-enhanced-hide' => 'వివరాలను దాచు',
'rc-old-title' => 'మొదట "$1"గా సృష్టించారు',

# Recent changes linked
'recentchangeslinked' => 'సంబంధిత మార్పులు',
'recentchangeslinked-feed' => 'సంబంధిత మార్పులు',
'recentchangeslinked-toolbox' => 'పొంతనగల మార్పులు',
'recentchangeslinked-title' => '$1 కు సంబంధించిన మార్పులు',
'recentchangeslinked-summary' => "దీనికి లింకై ఉన్న పేజీల్లో జరిగిన చివరి మార్పులు ఇక్కడ చూడవచ్చు. మీ వీక్షణ జాబితాలో ఉన్న పేజీలు '''బొద్దు'''గా ఉంటాయి.",
'recentchangeslinked-page' => 'పేజీ పేరు:',
'recentchangeslinked-to' => 'ఇచ్చిన పేజీకి లింకయివున్న పేజీలలో జరిగిన మార్పులను చూపించు',

# Upload
'upload' => 'దస్త్రపు ఎక్కింపు',
'uploadbtn' => 'దస్త్రాన్ని ఎక్కించు',
'reuploaddesc' => 'మళ్ళీ అప్‌లోడు ఫారంకు వెళ్ళు.',
'upload-tryagain' => 'మార్చిన ఫైలు వివరణని దాఖలుచేయండి',
'uploadnologin' => 'లాగిన్‌ అయిలేరు',
'uploadnologintext' => 'దస్త్రాలను ఎక్కించడానికి మీరు $1 ఉండాలి.',
'upload_directory_missing' => 'ఎగుమతి డైరెక్టరీ ($1) తప్పింది మరియు వెబ్ సర్వర్ దాన్ని సృష్టించలేకున్నది.',
'upload_directory_read_only' => 'అప్‌లోడు డైరెక్టరీ ($1), వెబ్‌సర్వరు రాసేందుకు అనుకూలంగా లేదు.',
'uploaderror' => 'ఎక్కింపు పొరపాటు',
'upload-recreate-warning' => "'''హెచ్చరిక: ఆ పేరుతో ఉన్న దస్త్రాన్ని తరలించి లేదా తొలగించి ఉన్నారు.'''

మీ సౌకర్యం కోసం ఈ పుట యొక్క తొలగింపు మరియు తరలింపు చిట్టాని ఇక్కడ ఇస్తున్నాం:",
'uploadtext' => "దస్త్రాలను ఎక్కించడానికి ఈ కింది ఫారాన్ని ఉపయోగించండి.
గతంలో ఎక్కించిన దస్త్రాలను చూడడానికి లేదా వెతకడానికి [[Special:FileList|ఎక్కించిన దస్త్రాల యొక్క జాబితా]]కు వెళ్ళండి, (పునః)ఎక్కింపులు [[Special:Log/upload|ఎక్కింపుల చిట్టా]] లోనూ తొలగింపులు [[Special:Log/delete|తొలగింపుల చిట్టా]] లోనూ కూడా నమోదవుతాయి.

ఒక దస్త్రాన్ని ఏదైనా పుటలో చేర్చడానికి, కింద చూపిన వాటిలో ఏదేనీ విధంగా లింకుని వాడండి:
* దస్త్రపు పూర్తి కూర్పుని వాడడానికి '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.jpg]]</nowiki></code>'''
* ఎడమ వైపు మార్జినులో 200 పిక్సెళ్ళ వెడల్పుగల బొమ్మ  మరియు 'ప్రత్యామ్నాయ పాఠ్యం' అన్న వివరణతో గల పెట్టె కోసం  '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.png|200px|thumb|left|ప్రత్యామ్నాయ పాఠ్యం]]</nowiki></code>'''
* దస్త్రాన్ని చూపించకుండా నేరుగా లింకు ఇవ్వడానికి '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:File.ogg]]</nowiki></code>'''",
'upload-permitted' => 'అనుమతించే ఫైలు రకాలు: $1.',
'upload-preferred' => 'అనుమతించే ఫైలు రకాలు: $1.',
'upload-prohibited' => 'నిషేధించిన ఫైలు రకాలు: $1.',
'uploadlog' => 'ఎక్కింపుల చిట్టా',
'uploadlogpage' => 'ఎక్కింపుల చిట్టా',
'uploadlogpagetext' => 'ఇటీవల జరిగిన ఫైలు అప్‌లోడుల జాబితా ఇది.',
'filename' => 'ఫైలు పేరు',
'filedesc' => 'సారాంశం',
'fileuploadsummary' => 'సారాంశం:',
'filereuploadsummary' => 'ఫైలు మార్పులు:',
'filestatus' => 'కాపీహక్కు స్థితి:',
'filesource' => 'మూలం:',
'uploadedfiles' => 'ఎగుమతయిన ఫైళ్ళు',
'ignorewarning' => 'హెచ్చరికను పట్టించుకోకుండా ఫైలును భద్రపరచు',
'ignorewarnings' => 'హెచ్చరికలను పట్టించుకోవద్దు',
'minlength1' => 'పైలు పేర్లు కనీసం ఒక్క అక్షరమైనా ఉండాలి.',
'illegalfilename' => '"$1" అనే దస్త్రపుపేరు పేజీ శీర్షికలలో వాడకూడని అక్షరాలను కలిగివుంది.
దస్త్రపు పేరుని మార్చి మళ్ళీ ఎక్కించడానికి ప్రయత్నించండి.',
'filename-toolong' => 'దస్త్రపు పేరు 240 బైట్ల కంటే పొడవు ఉండకూడదు.',
'badfilename' => 'ఫైలు పేరు "$1"కి మార్చబడినది.',
'filetype-mime-mismatch' => 'దస్త్రపు పొడగింపు ".$1" ఆ దస్త్రం యొక్క MIME రకం ($2) తో సరిపోలలేదు.',
'filetype-badmime' => '"$1" MIME రకం ఉన్న ఫైళ్ళను ఎగుమతికి అనుమతించం.',
'filetype-bad-ie-mime' => 'ఈ ఫైలుని ఎగుమతి చేయలేరు ఎందుకంటే ఇంటర్నెట్ ఎక్స్‌ప్లోరర్ దీన్ని "$1" గా చూపిస్తుంది, ఇది అనుమతి లేని మరియు ప్రమాదకారమైన ఫైలు రకం.',
'filetype-unwanted-type' => "'''\".\$1\"''' అనేది అవాంఛిత ఫైలు రకం.
\$2 {{PLURAL:\$3|అనేది వాడదగ్గ ఫైలు రకం|అనేవి వాడదగ్గ ఫైలు రకాలు}}.",
'filetype-banned-type' => '\'\'\'".$1"\'\'\' {{PLURAL:$4|అనేది అనుమతించబడిన ఫైలు రకం కాదు|అనేవి అనుమతించబడిన ఫైలు రకాలు కాదు}}.
అనుమతించబడిన {{PLURAL:$3|ఫైలు రకం|ఫైలు రకాలు}} $2.',
'filetype-missing' => 'ఫైలుకి పొడగింపు (".jpg" లాంటిది) లేదు.',
'empty-file' => 'మీరు సమర్పించిన దస్త్రం ఖాళీగా ఉంది.',
'file-too-large' => 'మీరు సమర్పించిన దస్త్రం చాలా పెద్దగా ఉంది.',
'filename-tooshort' => 'దస్త్రపు పేరు మరీ చిన్నగా ఉంది.',
'filetype-banned' => 'ఈ రకపు దస్త్రాలని నిషేధించాము.',
'verification-error' => 'దస్త్రపు తనిఖీలో ఈ దస్త్రం ఉత్తీర్ణమవలేదు.',
'hookaborted' => 'మీరు చేయప్రత్నించిన మార్పుని ఒక పొడగింత కొక్కెం విచ్ఛిన్నం చేసింది.',
'illegal-filename' => 'ఆ దస్త్రపుపేరు అనుమతించబడదు.',
'overwrite' => 'ఇప్పటికే ఉన్న దస్త్రాన్ని తిరిగరాయడం అనుమతించబడదు.',
'unknown-error' => 'ఏదో తెలియని పొరపాటు జరిగింది.',
'tmp-create-error' => 'తాత్కాలిక దస్త్రాన్ని సృష్టించలేకపోయాం.',
'tmp-write-error' => 'తాత్కాలిక దస్త్రాన్ని రాయడంలో పొరపాటు.',
'large-file' => 'ఫైళ్ళు $1 కంటే పెద్దవిగా ఉండకుండా ఉంటే మంచిది; ఈ ఫైలు $2 ఉంది.',
'largefileserver' => 'ఈ ఫైలు సైజు సర్వరులో విధించిన పరిమితి కంటే ఎక్కువగా ఉంది.',
'emptyfile' => 'మీరు అప్‌లోడు చేసిన ఫైలు ఖాళీగా ఉన్నట్లుంది. ఫైలు పేరును ఇవ్వడంలో స్పెల్లింగు తప్పు దొర్లి ఉండొచ్చు. మీరు అప్‌లోడు చెయ్యదలచింది ఇదో కాదో నిర్ధారించుకోండి.',
'windows-nonascii-filename' => 'దస్త్రాల పేర్లలో ప్రత్యేక అక్షరాలకు ఈ వికీలో తోడ్పాటు లేదు.',
'fileexists' => 'ఈ పేరుతో ఒక ఫైలు ఇప్పటికే ఉంది.
దీనిని మీరు మార్చాలో లేదో తెలియకపోతె ఫైలు <strong>[[:$1]]</strong>ని చూడండి.
[[$1|thumb]]',
'filepageexists' => 'ఈ ఫైలు కొరకు వివరణ పేజీని <strong>[[:$1]]</strong> వద్ద ఈసరికే సృష్టించారు, కానీ ఆ పేరుతో ప్రస్తుతం ఏ ఫైలూ లేదు. మీరు ఇస్తున్న సంగ్రహం ఆ వివరణ పేజీలో కనబడదు. మీ సంగ్రహం అక్కడ కనబడాలంటే, నేరుగా అక్కడే చేర్చాలి.
[[$1|thumb]]',
'fileexists-extension' => 'ఇటువంటి పేరుతో మరో ఫైలు ఉంది: [[$2|thumb]]
* ఎగుమతి చేస్తున్న ఫైలు పేరు: <strong>[[:$1]]</strong>
* ప్రస్తుతం ఉన్న ఫైలు పేరు: <strong>[[:$2]]</strong>
దయచేసి మరో పేరు ఎంచుకోండి.',
'fileexists-thumbnail-yes' => "ఈ ఫైలు కుదించిన బొమ్మ లాగా ఉంది ''(థంబ్‌నెయిలు)''. [[$1|thumb]]
<strong>[[:$1]]</strong> ఫైలు చూడండి.
గుర్తు పెట్టబడిన ఫైలు అసలు సైజే అది అయితే, మరో థంబ్‌నెయిలును అప్‌లోడు చెయ్యాల్సిన అవసరం లేదు.",
'file-thumbnail-no' => "ఫైలు పేరు <strong>$1</strong> తో మొదలవుతోంది.
అది పరిమాణం తగ్గించిన ''(నఖచిత్రం)'' లాగా అనిపిస్తోంది.
ఈ బొమ్మ యొక్క పూర్తి స్పష్టత కూర్పు ఉంటే, దాన్ని ఎగుమతి చెయ్యండి. లేదా ఫైలు పేరును మార్చండి.",
'fileexists-forbidden' => 'ఈ పేరుతో ఇప్పటికే ఒక ఫైలు ఉంది, దాన్ని తిరగరాయలేరు.
మీరు ఇప్పటికీ ఈ ఫైలుని ఎగుమతి చేయాలనుకుంటే, వెనక్కి వెళ్ళి మరో పేరుతో ఎగుమతి చేయండి. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'ఈ పేరుతో ఇప్పటికే ఒక ఫైలు అందరి ఫైళ్ళ ఖజానాలో ఉంది.
ఇప్పటికీ మీ ఫైలుని ఎగుమతి చేయాలనుకుంటే, వెనక్కివెళ్ళి మరో పేరు వాడండి. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'ఈ ఫైలు క్రింద పేర్కొన్న {{PLURAL:$1|ఫైలుకి|ఫైళ్ళకి}} నకలు:',
'file-deleted-duplicate' => 'గతంలో ఈ ఫైలు లాంటిదే ఒక ఫైలుని ([[:$1]]) తొలగించివున్నారు. మీరు దీన్ని ఎగుమతి చేసేముందు ఆ ఫైలు యొక్క తొలగింపు చరిత్రని ఒక్కసారి చూడండి.',
'file-deleted-duplicate-notitle' => 'సరిగ్గా ఈ ఫైలునే పోలిన మరో ఫైలును గతంలో తొలగించాం. దాని పేరును అణచిపెట్టాం.
దాన్ని తిరిగి ఎక్కించే ముందు, పరిస్థితిని సమీక్షించేందుకు గాను, అణచబడిన ఫైళ్ళ డేటాను చూడగలిగే వారిని అడగండి.',
'uploadwarning' => 'ఎక్కింపు హెచ్చరిక',
'uploadwarning-text' => 'ఫైలు వివరణని క్రింద మార్చి మళ్ళీ ప్రయత్నించండి.',
'savefile' => 'దస్త్రాన్ని భద్రపరచు',
'uploadedimage' => '"[[$1]]"ని ఎక్కించారు',
'overwroteimage' => '"[[$1]]" యొక్క కొత్త కూర్పును ఎక్కించారు',
'uploaddisabled' => 'క్షమించండి, అప్‌లోడు చెయ్యడం ప్రస్తుతానికి ఆపబడింది',
'copyuploaddisabled' => 'URL ద్వారా ఎక్కింపుని అశక్తం చేసారు.',
'uploadfromurl-queued' => 'మీ ఎక్కింపు వరుసలో ఉంది.',
'uploaddisabledtext' => 'ఫైళ్ళ ఎగుమతులను అచేతనం చేసారు.',
'php-uploaddisabledtext' => 'PHPలో ఫైలు ఎక్కింపులు అచేతనమై ఉన్నాయి.
దయచేసి file_uploads అమరికని చూడండి.',
'uploadscripted' => 'ఈ ఫైల్లో HTML కోడు గానీ స్క్రిప్టు కోడు గానీ ఉంది. వెబ్ బ్రౌజరు దాన్ని పొరపాటుగా అనువదించే అవకాశం ఉంది.',
'uploadvirus' => 'ఈ ఫైలులో వైరస్‌ ఉంది! వివరాలు: $1',
'uploadjava' => 'ఇదొక ZIP ఫైలు, ఇందులో ఒక Java .class ఫైలు ఉంది.
Java ఫైళ్ళ వలన భద్రతకు తూట్లు పడే అవకాశం ఉంది కాబట్టి, వాటిని ఎక్కించడానికి అనుమతి లేదు.',
'upload-source' => 'మూల దస్త్రం',
'sourcefilename' => 'మూలం ఫైలుపేరు:',
'sourceurl' => 'మూల URL:',
'destfilename' => 'ఉద్దేశించిన ఫైలుపేరు:',
'upload-maxfilesize' => 'గరిష్ట ఫైలు పరిమాణం: $1',
'upload-description' => 'దస్త్రపు వివరణ',
'upload-options' => 'ఎక్కింపు వికల్పాలు',
'watchthisupload' => 'ఈ ఫైలుని గమనించు',
'filewasdeleted' => 'ఇదే పేరుతో ఉన్న ఒక ఫైలును గతంలో అప్లోడు చేసారు, తరువాతి కాలంలో దాన్ని తొలగించారు. దాన్నీ మళ్ళీ అప్లోడు చేసే ముందు, మీరు $1 ను చూడాలి',
'filename-bad-prefix' => "మీరు అప్లోడు చేస్తున్న ఫైలు పేరు '''\"\$1\"''' తో మొదలవుతుంది. ఇది డిజిటల్ కెమెరాలు ఆటోమాటిగ్గా ఇచ్చే పేరు. మరింత వివరంగా ఉండే పేరును ఎంచుకోండి.",
'upload-success-subj' => 'అప్‌లోడు జయప్రదం',
'upload-success-msg' => '[$2] నుండి మీ ఎక్కింపు సఫలమైంది. అది ఇక్కడ అందుబాటులో ఉంది: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'ఎక్కింపు సమస్య',
'upload-failure-msg' => '[$2] నుండి మీ ఎక్కింపుతో ఏదో సమస్య ఉంది:

$1',
'upload-warning-subj' => 'ఎక్కింపు హెచ్చరిక',
'upload-warning-msg' => '[$2] నుండి మీ ఎక్కింపులో ఏదో సమస్య ఉంది.  దాన్ని సరిచేయడానికి మీరు తిరిగి [[Special:Upload/stash/$1|ఎక్కింపు ఫారానికి]] వెళ్ళవచ్చు.',

'upload-proto-error' => 'తప్పు ప్రోటోకోల్',
'upload-proto-error-text' => 'రిమోట్ అప్‌లోడులు చెయ్యాలంటే URLలు <code>http://</code> లేదా <code>ftp://</code> తో మొదలు కావాలి.',
'upload-file-error' => 'అంతర్గత లోపం',
'upload-file-error-text' => 'సర్వరులో తాత్కాలిక ఫైలును సృష్టించబోగా ఏదో అంతర్గత లోపం తలెత్తింది. ఎవరైనా [[Special:ListUsers/sysop|నిర్వాహకుడిని]] సంప్రదించండి.',
'upload-misc-error' => 'తెలియని అప్‌లోడు లోపం',
'upload-misc-error-text' => 'అప్‌లోడు చేస్తూండగా ఏదో తెలియని లోపం తలెత్తింది. URL సరైనదేనని, అది అందుబాటులోనే ఉందని నిర్ధారించుకుని మళ్ళీ ప్రయత్నిందండి. సమస్య అలాగే ఉంటే, సిస్టము నిర్వాహకుని సంప్రదించండి.',
'upload-too-many-redirects' => 'ఆ URLలో చాలా దారిమార్పులు ఉన్నాయి',
'upload-unknown-size' => 'సైజు తెలియదు',
'upload-http-error' => 'ఒక HTTP పొరపాటు జరిగింది: $1',

# File backend
'backend-fail-stream' => '"$1" ఫైలును స్ట్రీమింగు చెయ్యలేకపోయాం.',
'backend-fail-backup' => '"$1" ఫైలును బ్యాకప్పు చెయ్యలేకపోయాం.',
'backend-fail-notexists' => '$1 ఫైలు అసలు లేనేలేదు.',
'backend-fail-hashes' => 'పోలిక కోసం ఫైలు హాష్‍లను పొందలేకపోయాం.',
'backend-fail-notsame' => 'సరిగ్గా సరిపోయే ఫైలు కాదు గానీ, ఒక ఫైలు ఈసరికే "$1" వద్ద ఉంది.',
'backend-fail-invalidpath' => '"$1" సరైన స్టోరేజి పాత్ కాదు',
'backend-fail-delete' => '$1 ఫైలును తొలగించలేకున్నాం.',
'backend-fail-describe' => '"$1" ఫైలు మెటాడేటాను మార్చలేకపోయాం.',
'backend-fail-alreadyexists' => '$1 అనే దస్త్రం ఇప్పటికే ఉంది.',
'backend-fail-store' => '"$1" ఫైలును "$2" వద్ద భద్రపరచలేకపోయాం.',
'backend-fail-copy' => '"$1" నుండి "$2" కి ఫైలును కాపీ చెయ్యలేకపోయాం.',
'backend-fail-move' => '"$1" నుండి "$2" కి ఫైలును తరలించలేకపోయాం.',
'backend-fail-opentemp' => 'తాత్కాలిక దస్త్రాన్ని తెరవలేకపోతున్నాం.',
'backend-fail-writetemp' => 'తాత్కాలిక ఫైలులో రాయలేకపోయాం.',
'backend-fail-closetemp' => 'తాత్కాలిక దస్త్రాన్ని మూసివేయలేకపోయాం.',
'backend-fail-read' => '$1 దస్త్రము చదువలేకపోతిమి.',
'backend-fail-create' => '$1 ఫైలులో రాయలేకున్నాం.',
'backend-fail-maxsize' => '"$1" ఫైలు {{PLURAL:$2|ఒక బైట్|$2 బైట్ల}} కంటే పెద్దది కావడం చేత దాన్ని రాయలేకపోయాం.',
'backend-fail-readonly' => 'స్టోరేజి బ్యాక్‍ఎండ్ "$1" ప్రస్తుతం రీడ్-ఓన్లీ స్థితిలో ఉంది. దానికి కారణం: "<em>$2</em>"',
'backend-fail-connect' => 'స్టోరేజీ బ్యాక్‍ఎండ్ "$1" కి కనెక్టు కాలేక పోయాం.',
'backend-fail-internal' => 'స్టోరేజీ బ్యాక్‍ఎండ్ "$1" లో ఏదో తెలియని లోపం దొర్లింది.',
'backend-fail-contenttype' => '"$1" లో దాచాల్సిన ఫైలు యొక్క కంటెంటు రకమేంటో నిర్ధారించలేకపోయాం.',
'backend-fail-batchsize' => 'స్టోరేజీ బ్యాక్‍ఎండ్ కు $1 ఫైలు {{PLURAL:$1|ఆపరేషన్|ఆపరేషన్ల}} తో కూడిన బ్యాచ్ ఒకటి ఇవ్వబడింది; పరిమితి: $2 {{PLURAL:$2|ఆపరేషన్|ఆపరేషన్లు}}.',

# ZipDirectoryReader
'zip-file-open-error' => 'ఈ ఫైలును ZIP పరీక్ష కోసం తెరవబోతే, ఏదో తెలియని లోపం ఎదురైంది.',
'zip-wrong-format' => 'ఇచ్చినది ZIP ఫైలు కాదు.',
'zip-bad' => 'ఫైలు చెడిపోయిన, లేదా చదవడానికి వీల్లేని ZIP ఫైలు అయ్యుండాలి.
దానిపై భద్రతా పరమైన పరీక్ష చెయ్యలేం.',
'zip-unsupported' => 'ఇది MediaWiki కి పట్టులేని ZIP అంశాలు కలిగిన ZIP ఫైలు.
దీనిపై సరైన భద్రతా పరీక్షలు చెయ్యలేం.',

# Special:UploadStash
'uploadstash-summary' => 'ఎక్కించినప్పటికీ వికీలో ప్రచురితం కాని  (లేదా ఎక్కింపు జరుగుతున్న) ఫైళ్ళు ఈ పేజీలో కనిపిస్తాయి. ఈ ఫైళ్ళు ఎక్కించిన వాడుకరికి తప్ప మరొకరికి కనబడవు.',
'uploadstash-badtoken' => 'ఆ చర్య విఫలమైంది. బహుశా మీ ఎడిటింగు అనుమతులకు కాలం చెల్లిందేమో. మళ్ళీ ప్రయత్నించండి.',
'uploadstash-errclear' => 'ఫైళ్ళ తీసివేత విఫలమైంది.',
'uploadstash-refresh' => 'దస్త్రాల జాబిజాను తాజాకరించు',

# img_auth script messages
'img-auth-accessdenied' => 'అనుమతిని నిరాకరించారు',
'img-auth-nopathinfo' => 'PATH_INFO లేదు.
మీ సర్వరు ఈ సమాచారాన్ని పంపించేందుకు అనువుగా అమర్చి లేదు.
అది CGI ఆధారితమై ఉండొచ్చు. అంచేత img_auth కు అనుకూలంగా లేదు.
https://www.mediawiki.org/wiki/Manual:Image_Authorization చూడండి.',
'img-auth-notindir' => 'అభ్యర్థించిన తోవ ఎక్కింపు సంచయంలో లేదు.',
'img-auth-badtitle' => '"$1" నుండి సరైన శీర్షికని నిర్మించలేకపోయాం.',
'img-auth-nologinnWL' => 'మీరు ప్రవేశించి లేరు మరియు "$1" అనేది తెల్లజాబితాలో లేదు.',
'img-auth-nofile' => '"$1" అనే ఫైలు ఉనికిలో లేదు.',
'img-auth-isdir' => 'మీరు "$1" అనే సంచయాన్ని చూడడానికి ప్రయత్నిస్తున్నారు.
ఫైళ్ళను చూడడానికి మాత్రమే అనుమతివుంది.',
'img-auth-streaming' => '"$1" ను ప్రసారిస్తున్నాం.',
'img-auth-public' => 'img_auth.php యొక్క పని, గోప్యవికీలనుండి ఫైళ్ళ వివరాలను బయట పెట్టడం.
ఇది బహిరంగ వికీగా తయారుచేయబడింది.
సరైన భద్రత కోసం, img_auth.php ను అచేతనం చేసాం.',
'img-auth-noread' => '"$1"ని చూడడానికి వాడుకరికి అనుమతి లేదు.',
'img-auth-bad-query-string' => 'ఈ URL లో తప్పుడు క్వెరీ స్ట్రింగు ఉంది.',

# HTTP errors
'http-invalid-url' => 'తప్పుడు URL: $1',
'http-invalid-scheme' => '"$1" ప్రణాళికలో ఉన్న URLలకు తోడ్పాటులేదు',
'http-request-error' => 'తెలియని పొరపాటు వల్ల HTTP అభ్యర్థన విఫలమైంది.',
'http-read-error' => 'HTTP చదువుటలో పొరపాటు.',
'http-timed-out' => 'HTTP అభ్యర్థనకి కాలం చెల్లింది.',
'http-curl-error' => 'URLని తేవడంలో పొరపాటు: $1',
'http-bad-status' => 'HTTP అభ్యర్ధన చేస్తున్నప్పుడు సమస్య ఉంది: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'URL కు వెళ్ళలేకపోయాం',
'upload-curl-error6-text' => 'ఇచ్చిన URL కు వెళ్ళలేకపోయాం. URL సరైనదేనని, సైటు పనిచేస్తూనే ఉన్నదనీ నిర్ధారించుకోండి.',
'upload-curl-error28' => 'అప్లోడు కాలాతీతం',
'upload-curl-error28-text' => 'చాలా సమయం తరువాత కూడా సైటు స్పందించలేదు. సైటు పనిచేస్తూనే ఉందని నిర్ధారించుకుని, కాస్త ఆగి మళ్ళీ ప్రయత్నించండి. రద్దీ కాస్త తక్కువగా ఉన్నపుడు ప్రయత్నిస్తే నయం.',

'license' => 'లైసెన్సు వివరాలు:',
'license-header' => 'లైసెన్సింగ్',
'nolicense' => 'దేన్నీ ఎంచుకోలేదు',
'license-nopreview' => '(మునుజూపు అందుబాటులో లేదు)',
'upload_source_url' => ' (సార్వజనికంగా అందుబాటులో ఉన్న, సరైన URL)',
'upload_source_file' => ' (మీ కంప్యూటర్లో ఒక ఫైలు)',

# Special:ListFiles
'listfiles-summary' => 'ఈ ప్రత్యేక పేజీ ఇప్పటి వరకూ ఎక్కించిన దస్త్రాలన్నింటినీ చూపిస్తుంది.
వాడుకరి పేరు మీద వడపోసినప్పుడు, ఆ వాడుకరి ఎక్కించిన కూర్పు ఆ దస్త్రం యొక్క సరికొత్త కూర్పు అయితేనే చూపిస్తుంది.',
'listfiles_search_for' => 'మీడియా పేరుకై వెతుకు:',
'imgfile' => 'దస్త్రం',
'listfiles' => 'దస్త్రాల జాబితా',
'listfiles_thumb' => 'నఖచిత్రం',
'listfiles_date' => 'తేదీ',
'listfiles_name' => 'పేరు',
'listfiles_user' => 'వాడుకరి',
'listfiles_size' => 'పరిమాణం',
'listfiles_description' => 'వివరణ',
'listfiles_count' => 'కూర్పులు',
'listfiles-latestversion' => 'ప్రస్తుత కూర్పు',
'listfiles-latestversion-yes' => 'అవును',
'listfiles-latestversion-no' => 'కాదు',

# File description page
'file-anchor-link' => 'దస్త్రం',
'filehist' => 'దస్త్రపు చరిత్ర',
'filehist-help' => 'తేదీ/సమయం ను నొక్కి ఆ సమయాన ఫైలు ఎలా ఉండేదో చూడవచ్చు.',
'filehist-deleteall' => 'అన్నిటినీ తొలగించు',
'filehist-deleteone' => 'తొలగించు',
'filehist-revert' => 'తిరుగుసేత',
'filehist-current' => 'ప్రస్తుత',
'filehist-datetime' => 'తేదీ/సమయం',
'filehist-thumb' => 'నఖచిత్రం',
'filehist-thumbtext' => '$1 యొక్క నఖచిత్ర కూర్పు',
'filehist-nothumb' => 'నఖచిత్రం లేదు',
'filehist-user' => 'వాడుకరి',
'filehist-dimensions' => 'కొలతలు',
'filehist-filesize' => 'దస్త్రపు పరిమాణం',
'filehist-comment' => 'వ్యాఖ్య',
'filehist-missing' => 'ఫైలు కనిపించుటలేదు',
'imagelinks' => 'దస్త్రపు వాడుక',
'linkstoimage' => 'కింది {{PLURAL:$1|పేజీ|$1 పేజీల}} నుండి ఈ ఫైలుకి లింకులు ఉన్నాయి:',
'linkstoimage-more' => '$1 కంటే ఎక్కువ {{PLURAL:$1|పేజీలు|పేజీలు}} ఈ ఫైలుకి లింకుని కలిగివున్నాయి.
ఈ ఫైలుకి లింకున్న {{PLURAL:$1|మొదటి ఒక పేజీని|మొదటి $1 పేజీలను}} ఈ క్రింది జాబితా చూపిస్తుంది.
[[Special:WhatLinksHere/$2|పూర్తి జాబితా]] కూడా ఉంది.',
'nolinkstoimage' => 'ఈ ఫైలుకు లింకున్న పేజీలు లేవు.',
'morelinkstoimage' => 'ఈ ఫైలుకు ఇంకా [[Special:WhatLinksHere/$1| లింకులను]] చూడు',
'linkstoimage-redirect' => '$1 (దస్త్రపు దారిమార్పు) $2',
'duplicatesoffile' => 'క్రింద పేర్కొన్న {{PLURAL:$1|ఫైలు ఈ ఫైలుకి నకలు|$1 ఫైళ్ళు ఈ ఫైలుకి నకళ్ళు}} ([[Special:FileDuplicateSearch/$2|మరిన్ని వివరాలు]]):',
'sharedupload' => 'ఈ ఫైలు $1 నుండి మరియు దీనిని ఇతర ప్రాజెక్టులలో కూడా ఉపయోగిస్తూవుండవచ్చు.',
'sharedupload-desc-there' => 'ఈ ఫైలు $1 నుండి వచ్చింది అలానే ఇతర ప్రాజెక్టులలో కూడా ఉపయోగిస్తూ ఉండవచ్చు.
మరింత సమాచారం కోసం, దయచేసి [$2 ఫైలు వివరణ పేజీ]ని చూడండి.',
'sharedupload-desc-here' => 'ఈ ఫైలు $1 నుండి మరియు దీనిని ఇతర ప్రాజెక్టులలో కూడా ఉపయోగిస్తూ ఉండవచ్చు.
దీని [$2 ఫైలు వివరణ పేజీ] లో ఉన్న వివరణని క్రింద చూపించాం.',
'filepage-nofile' => 'ఈ పేరుతో ఏ ఫైలు లేదు.',
'filepage-nofile-link' => 'ఈ పేరుతో ఏ ఫైలూ లేదు, కానీ మీరు $1 ను అప్‌లోడ్ చెయ్యవచ్చు.',
'uploadnewversion-linktext' => 'ఈ దస్త్రపు కొత్త కూర్పును ఎక్కించండి',
'shared-repo-from' => '$1 నుండి',
'shared-repo' => 'సామూహిక నిక్షేపం',
'shared-repo-name-wikimediacommons' => 'వికీమీడియా కామన్స్',
'upload-disallowed-here' => 'ఈ దస్త్రాన్ని మీరు తిరగరాయలేరు.',

# File reversion
'filerevert' => '$1 ను వెనక్కు తీసుకుపో',
'filerevert-legend' => 'ఫైలును వెనక్కు తీసుకుపో',
'filerevert-intro' => "మీరు '''[[Media:$1|$1]]''' ను [$3, $2 నాటి $4 కూర్పు]కు తీసుకు వెళ్తున్నారు.",
'filerevert-comment' => 'కారణం:',
'filerevert-defaultcomment' => '$2, $1 నాటి కూర్పుకు తీసుకువెళ్ళాం',
'filerevert-submit' => 'వెనక్కు తీసుకువెళ్ళు',
'filerevert-success' => "'''[[Media:$1|$1]]''' ను  [$3, $2 నాటి $4 కూర్పు]కు తీసుకువెళ్ళాం.",
'filerevert-badversion' => 'మీరిచ్చిన టైముస్టాంపుతో ఈ ఫైలుకు స్థానిక కూర్పేమీ లేదు.',

# File deletion
'filedelete' => '$1ని తొలగించు',
'filedelete-legend' => 'ఫైలుని తొలగించు',
'filedelete-intro' => "మీరు '''[[Media:$1|$1]]''' ఫైలుని దాని చరిత్రతో సహా తొలగించబోతున్నారు.",
'filedelete-intro-old' => "మీరు '''[[Media:$1|$1]]''' యొక్క  [$4 $3, $2] నాటి కూర్పును తొలగిస్తున్నారు.",
'filedelete-comment' => 'కారణం:',
'filedelete-submit' => 'తొలగించు',
'filedelete-success' => "'''$1'''ని తొలగించాం.",
'filedelete-success-old' => "'''[[Media:$1|$1]]''' యొక్క  $3, $2 నాటి కూర్పును తొలగించాం.</span>",
'filedelete-nofile' => "'''$1''' ఇక్కడ లేదు.",
'filedelete-nofile-old' => "'''$1''' యొక్క పాత కూర్పుల్లో మీరిచ్చిన పరామితులు కలిగిన కూర్పేమీ లేదు.",
'filedelete-otherreason' => 'ఇతర/అదనపు కారణం:',
'filedelete-reason-otherlist' => 'ఇతర కారణం',
'filedelete-reason-dropdown' => '* మామూలు తొలగింపు కారణాలు
** కాపీహక్కుల ఉల్లంఘన
** వేరొక దస్త్రానికి నకలు',
'filedelete-edit-reasonlist' => 'తొలగింపు కారణాలని మార్చండి',
'filedelete-maintenance' => 'సంరక్షణ నిమిత్తం ఫైళ్ళ తొలగింపు మరియు పునస్థాపనలను తాత్కాలికంగా అచేయతనం చేసారు.',
'filedelete-maintenance-title' => 'దస్త్రాన్ని తొలగించలేకపోయాం',

# MIME search
'mimesearch' => 'బొమ్మల మెటాడేటా(MIME)ను వెతకండి',
'mimesearch-summary' => 'ఈ పేజీ MIME-రకాన్ననుసరించి ఫైళ్ళను వడగట్టేందుకు దోహదం చేస్తుంది. Input: contenttype/subtype, ఉదా. <code>బొమ్మ/jpeg</code>.',
'mimetype' => 'MIME రకం:',
'download' => 'డౌన్‌లోడు',

# Unwatched pages
'unwatchedpages' => 'వీక్షణలో లేని పేజీలు',

# List redirects
'listredirects' => 'దారిమార్పుల జాబితా',

# Unused templates
'unusedtemplates' => 'వాడని మూసలు',
'unusedtemplatestext' => 'వేరే ఇతర పేజీలలో చేర్చని {{ns:template}} పేరుబరిలోని పేజీలన్నింటినీ ఈ పేజీ చూపిస్తుంది.
మూసలను తొలగించే ముందు వాటికి ఉన్న ఇతర లింకుల కోసం చూడడం గుర్తుంచుకోండి.',
'unusedtemplateswlh' => 'ఇతర లింకులు',

# Random page
'randompage' => 'యాదృచ్ఛిక పేజీ',
'randompage-nopages' => 'ఈ క్రింది {{PLURAL:$2|పెరుబరిలో|పెరుబరులలో}} పేజీలు ఏమి లేవు:$1',

# Random page in category
'randomincategory-invalidcategory' => '"$1" అనేది సరైన పర్గం పేరు కాదు.',
'randomincategory-nopages' => '[[:Category:$1|$1]] వర్గంలో పేజీలేమీ లేవు.',
'randomincategory-selectcategory-submit' => 'వెళ్ళు',

# Random redirect
'randomredirect' => 'యాదృచ్చిక దారిమార్పు',
'randomredirect-nopages' => '"$1" పేరుబరిలో దారిమార్పులేమీ లేవు.',

# Statistics
'statistics' => 'గణాంకాలు',
'statistics-header-pages' => 'పేజీ గణాంకాలు',
'statistics-header-edits' => 'మార్పుల గణాంకాలు',
'statistics-header-views' => 'వీక్షణల గణాంకాలు',
'statistics-header-users' => 'వాడుకరులు',
'statistics-header-hooks' => 'ఇతర గణాంకాలు',
'statistics-articles' => 'విషయపు పేజీలు',
'statistics-pages' => 'పేజీలు',
'statistics-pages-desc' => 'ఈ వికీలోని అన్ని పేజీలు (చర్చా పేజీలు, దారిమార్పులు, మొదలైనవన్నీ కలుపుకొని).',
'statistics-files' => 'ఎక్కించిన దస్త్రాలు',
'statistics-edits' => '{{SITENAME}}ని మొదలుపెట్టినప్పటినుండి జరిగిన మార్పులు',
'statistics-edits-average' => 'పేజీకి సగటు మార్పులు',
'statistics-views-total' => 'మొత్తం వీక్షణలు',
'statistics-views-total-desc' => 'ఉనికిలో లేని పుటలకు మరియు ప్రత్యేక పుటలకు వచ్చిన సందర్శనలని కలుపలేదు',
'statistics-views-peredit' => 'ఒక మార్పుకి వీక్షణలు',
'statistics-users' => 'నమోదైన [[Special:ListUsers|వాడుకర్లు]]',
'statistics-users-active' => 'క్రియాశీల వాడుకర్లు',
'statistics-users-active-desc' => 'గత {{PLURAL:$1|రోజు|$1 రోజుల}}లో ఒక్క చర్యైనా చేసిన వాడుకరులు',
'statistics-mostpopular' => 'ఎక్కువగా చూసిన పేజీలు',

'pageswithprop-submit' => 'వెళ్ళు',

'doubleredirects' => 'జంట దారిమార్పులు',
'doubleredirectstext' => 'ఇతర దారిమార్పు పుటలకి తీసుకెళ్ళే దారిమార్పులని ఈ పుట చూపిస్తుంది.
ప్రతీ వరుసలో మొదటి మరియు రెండవ దారిమార్పులకు లంకెలు, ఆలానే రెండవ దారిమార్పు పుట యొక్క లక్ష్యం ఉన్నాయి. సాధారణంగా ఈ రెండవ దారిమార్పు యొక్క లక్ష్యమే "అసలైనది", అదే మొదటి దారిమార్పు యొక్క లక్ష్యంగా ఉండాలి.
<del>కొట్టివేయబడిన</del> పద్దులు పరిష్కరించబడ్డవి.',
'double-redirect-fixed-move' => '[[$1]]ని తరలించారు, అది ప్రస్తుతం [[$2]]కి దారిమార్పు.',
'double-redirect-fixed-maintenance' => '[[$1]] కు జమిలి దారిమార్పును [[$2]] కు సరిచేస్తున్నాం.',
'double-redirect-fixer' => 'దారిమార్పు సరిద్దువారు',

'brokenredirects' => 'తెగిపోయిన దారిమార్పులు',
'brokenredirectstext' => 'కింది దారిమార్పులు లేని-పేజీలకు మళ్ళించుతున్నాయి:',
'brokenredirects-edit' => 'సవరించు',
'brokenredirects-delete' => 'తొలగించు',

'withoutinterwiki' => 'భాషా లింకులు లేని పేజీలు',
'withoutinterwiki-summary' => 'క్రింది పేజీల నుండి ఇతర భాషా వికీలకు లింకులు లేవు:',
'withoutinterwiki-legend' => 'ఆదిపదం',
'withoutinterwiki-submit' => 'చూపించు',

'fewestrevisions' => 'అతి తక్కువ కూర్పులు కలిగిన వ్యాసాలు',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|బైటు|బైట్లు}}',
'ncategories' => '$1 {{PLURAL:$1|వర్గం|వర్గాలు}}',
'ninterwikis' => '$1 {{PLURAL:$1|అంతర్వికీ|అంతర్వికీలు}}',
'nlinks' => '$1 {{PLURAL:$1|లింకు|లింకులు}}',
'nmembers' => '{{PLURAL:$1|ఒక ఉపవర్గం/పేజీ/ఫైలు|$1 ఉపవర్గాలు/పేజీలు/ఫైళ్లు}}',
'nrevisions' => '{{PLURAL:$1|ఒక సంచిక|$1 సంచికలు}}',
'nviews' => '$1 {{PLURAL:$1|దర్శనము|దర్శనలు}}',
'nimagelinks' => '$1 {{PLURAL:$1|పుట|పుటల}}లో ఉపయోగించారు',
'ntransclusions' => '$1 {{PLURAL:$1|పుట|పుటల}}లో ఉపయోగించారు',
'specialpage-empty' => 'ఈ పేజీ ఖాళీగా ఉంది.',
'lonelypages' => 'అనాధ పేజీలు',
'lonelypagestext' => 'కింది పేజీలకు {{SITENAME}}లోని ఏ ఇతర పేజీ నుండి కూడా లింకులు లేవు లేదా ఇవి మరే ఇతర పేజీలోనూ కలపబడలేదు.',
'uncategorizedpages' => 'వర్గీకరించని పేజీలు',
'uncategorizedcategories' => 'వర్గీకరించని వర్గములు',
'uncategorizedimages' => 'వర్గీకరించని బొమ్మలు',
'uncategorizedtemplates' => 'వర్గీకరించని మూసలు',
'unusedcategories' => 'ఉపయోగించని వర్గాలు',
'unusedimages' => 'ఉపయోగించబడని ఫైళ్ళు',
'popularpages' => 'ప్రజాదరణ పొందిన పేజీలు',
'wantedcategories' => 'కోరిన వర్గాలు',
'wantedpages' => 'కోరిన పేజీలు',
'wantedpages-badtitle' => 'ఫలితాల సమితిలో తప్పుడు శీర్షిక: $1',
'wantedfiles' => 'కావలసిన ఫైళ్ళు',
'wantedtemplates' => 'కావాల్సిన మూసలు',
'mostlinked' => 'అధిక లింకులు చూపే పేజీలు',
'mostlinkedcategories' => 'అధిక లింకులు చూపే వర్గాలు',
'mostlinkedtemplates' => 'ఎక్కువగా ఉపయోగించిన మూసలు',
'mostcategories' => 'అధిక వర్గాలలో చేరిన వ్యాసాలు',
'mostimages' => 'అధిక లింకులు గల బొమ్మలు',
'mostrevisions' => 'అధిక సంచికలు గల వ్యాసాలు',
'prefixindex' => 'ఉపసర్గతో అన్ని పేజీలు',
'prefixindex-namespace' => 'ఉపసర్గతో ఉన్న పేజీలు ($1 పేరుబరి)',
'shortpages' => 'చిన్న పేజీలు',
'longpages' => 'పొడవు పేజీలు',
'deadendpages' => 'అగాధ (డెడ్ఎండ్) పేజీలు',
'deadendpagestext' => 'కింది పేజీల నుండి ఈ వికీ లోని ఏ ఇతర పేజీకీ లింకులు లేవు.',
'protectedpages' => 'సంరక్షిత పేజీలు',
'protectedpages-indef' => 'అనంత సంరక్షణ మాత్రమే',
'protectedpages-cascade' => 'కాస్కేడింగు రక్షణలు మాత్రమే',
'protectedpagesempty' => 'ఈ పరామితులతో ప్రస్తుతం ఏ పేజీలు కూడా సంరక్షించబడి లేవు.',
'protectedtitles' => 'సంరక్షిత శీర్షికలు',
'protectedtitlesempty' => 'ఈ పరామితులతో ప్రస్తుతం శీర్షికలేమీ సరక్షించబడి లేవు.',
'listusers' => 'వాడుకరుల జాబితా',
'listusers-editsonly' => 'మార్పులు చేసిన వాడుకరులను మాత్రమే చూపించు',
'listusers-creationsort' => 'చేరిన తేదీ క్రమంలో చూపించు',
'usereditcount' => '$1 {{PLURAL:$1|మార్పు|మార్పులు}}',
'usercreated' => '$1 న $2కి {{GENDER:$3|చేరారు}}',
'newpages' => 'కొత్త పేజీలు',
'newpages-username' => 'వాడుకరి పేరు:',
'ancientpages' => 'పాత పేజీలు',
'move' => 'తరలించు',
'movethispage' => 'ఈ పేజీని తరలించు',
'unusedimagestext' => 'ఈ క్రింది ఫైళ్ళు ఉన్నాయి కానీ వాటిని ఏ పేజీలోనూ ఉపయోగించట్లేదు.
ఇతర వెబ్ సైట్లు సూటి URL ద్వారా ఇక్కడి ఫైళ్ళకు లింకు ఇవ్వవచ్చు, మరియు ఆవిధంగా క్రియాశీలంగా వాడుకలో ఉన్నప్పటికీ అటువంటివి ఈ జాబితాలో చేరి ఉండవచ్చునని గమనించండి.',
'unusedcategoriestext' => 'కింది వర్గాలకు పేజీలైతే ఉన్నాయి గానీ, వీటిని వ్యాసాలు గానీ, ఇతర వర్గాలు గానీ ఉపయోగించడం లేదు.',
'notargettitle' => 'గమ్యం లేదు',
'notargettext' => 'ఈ పని ఏ పేజీ లేదా సభ్యునిపై జరగాలనే గమ్యాన్ని మీరు సూచించలేదు.',
'nopagetitle' => 'అలాంటి పేజీ లేదు',
'nopagetext' => 'మీరు అడిగిన పేజీ లేదు',
'pager-newer-n' => '{{PLURAL:$1|1 కొత్తది|$1 కొత్తవి}}',
'pager-older-n' => '{{PLURAL:$1|1 పాతది|$1 పాతవి}}',
'suppress' => ' పూర్తి తొలగింపు',
'querypage-disabled' => 'పనితీరు కారణాల వలన, ఈ ప్రత్యేకపేజీని అశక్తం చేసాం.',

# Book sources
'booksources' => 'పుస్తక మూలాలు',
'booksources-search-legend' => 'పుస్తక మూలాల కోసం వెతుకు',
'booksources-go' => 'వెళ్ళు',
'booksources-text' => 'కొత్త, పాత పుస్తకాలు అమ్మే ఇతర సైట్లకు లింకులు కింద ఇచ్చాం. మీరు వెతికే పుస్తకాలకు సంబంధించిన మరింత సమాచారం కూడా అక్కడ దొరకొచ్చు:',
'booksources-invalid-isbn' => 'మీరిచ్చిన ISBN సరైనదిగా అనిపించుటలేదు; అసలు మూలాన్నుండి కాపీ చేయడంలో పొరపాట్లున్నాయేమో చూసుకోండి.',

# Special:Log
'specialloguserlabel' => 'కర్త:',
'speciallogtitlelabel' => 'లక్ష్యం (శీర్షిక లేదా వాడుకరి):',
'log' => 'చిట్టాలు',
'all-logs-page' => 'అన్ని బహిరంగ చిట్టాలు',
'alllogstext' => '{{SITENAME}}  యొక్క అందుబాటులో ఉన్న అన్ని చిట్టాల యొక్క సంయుక్త ప్రదర్శన.
ఒక చిట్టా రకాన్ని గానీ, ఒక వాడుకరి పేరు గానీ (case-sensitive), లేదా ప్రభావిత  పుటని (ఇది కూడా case-sensitive) గానీ ఎంచుకుని సంబంధిత చిట్టాను మాత్రమే చూడవచ్చు.',
'logempty' => 'సరిపోలిన అంశాలేమీ చిట్టాలో లేవు.',
'log-title-wildcard' => 'ఈ పాఠ్యంతో మొదలయ్యే పుస్తకాల కొరకు వెతుకు',
'showhideselectedlogentries' => 'ఎంచుకున్న చిట్టా పద్దులను చూపించు/దాచు',

# Special:AllPages
'allpages' => 'అన్ని పేజీలు',
'alphaindexline' => '$1 నుండి $2 వరకు',
'nextpage' => 'తరువాతి పేజీ ($1)',
'prevpage' => 'మునుపటి పేజీ ($1)',
'allpagesfrom' => 'ఇక్కడ మొదలు పెట్టి పేజీలు చూపించు:',
'allpagesto' => 'ఇక్కడవరకు ఉన్న పేజీలు చూపించు:',
'allarticles' => 'అన్ని పేజీలు',
'allinnamespace' => 'అన్ని పేజీలు ($1 namespace)',
'allpagessubmit' => 'వెళ్లు',
'allpagesprefix' => 'ఈ ఆదిపదం కలిగిన పేజీలను చూపించు:',
'allpagesbadtitle' => 'మీరిచ్చిన పేజీ పేరు సరైనది కాకపోయి ఉండాలి లేదా దానికి భాషాంతర లేదా అంతర్వికీ ఆదిపదమైనా ఉండి ఉండాలి. పేర్లలో వాడకూడని కారెక్టర్లు ఆ పేరులో ఉండి ఉండవచ్చు.',
'allpages-bad-ns' => '{{SITENAME}} లో "$1" అనే నేమ్&zwnj;స్పేస్ లేదు.',
'allpages-hide-redirects' => 'దారిమార్పులను దాచు',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'ఈ పేజీ యొక్క కాషె కూర్పును చూస్తున్నారు. ఇది $1 దాకా పాతదై ఉండవచ్చు.',
'cachedspecial-viewing-cached-ts' => 'ఈ పేజీ యొక్క కాషె కూర్పును చూస్తున్నారు. ఇది పూర్తిగా వాస్తవమైన కూర్పు కాకపోవచ్చు.',
'cachedspecial-refresh-now' => 'సరికొత్త కూర్పును చూడండి.',

# Special:Categories
'categories' => 'వర్గాలు',
'categoriespagetext' => 'ఈ క్రింది {{PLURAL:$1|వర్గం పేజీలను లేదా మాధ్యమాలను కలిగివుంది|వర్గాలు పేజీలను లేదా మాధ్యమాలను కలిగివున్నాయి}}.
[[Special:UnusedCategories|వాడుకలో లేని వర్గాలని]] ఇక్కడ చూపించట్లేదు.
[[Special:WantedCategories|కోరుతున్న వర్గాలను]] కూడా చూడండి.',
'categoriesfrom' => 'ఇక్కడనుండి మొదలుకొని వర్గాలు చూపించు:',
'special-categories-sort-count' => 'సంఖ్యల ప్రకారం క్రమపరచు',
'special-categories-sort-abc' => 'అకారాది క్రమంలో అమర్చు',

# Special:DeletedContributions
'deletedcontributions' => 'తొలగించబడిన వాడుకరి రచనలు',
'deletedcontributions-title' => 'తొలగించబడిన వాడుకరి రచనలు',
'sp-deletedcontributions-contribs' => 'మార్పులు చేర్పులు',

# Special:LinkSearch
'linksearch' => 'బయటి లింకుల అన్వేషణ',
'linksearch-pat' => 'వెతకాల్సిన నమూనా:',
'linksearch-ns' => 'పేరుబరి:',
'linksearch-ok' => 'వెతుకు',
'linksearch-text' => '"*.wikipedia.org" వంటి వైల్డ్ కార్డులు వాడవచ్చు.<br />ఉపయోగించుకోగల ప్రోటోకాళ్లు: <code>$1</code>',
'linksearch-line' => '$2 నుండి $1కి లింకు ఉంది',
'linksearch-error' => 'హోస్ట్‌నేముకు ముందు మాత్రమే వైల్డ్ కార్డులు వాడవచ్చు.',

# Special:ListUsers
'listusersfrom' => 'వాడుకరులను ఇక్కడ నుండి చూపించు:',
'listusers-submit' => 'చూపించు',
'listusers-noresult' => 'వాడుకరి దొరకలేదు.',
'listusers-blocked' => '(నిరోధించారు)',

# Special:ActiveUsers
'activeusers' => 'క్రియాశీల వాడుకరుల జాబితా',
'activeusers-intro' => 'ఇది గత $1 {{PLURAL:$1|రోజులో|రోజులలో}} ఏదైనా కార్యకలాపం చేసిన వాడుకరుల జాబితా.',
'activeusers-count' => 'గడచిన {{PLURAL:$3|ఒక రోజు|$3 రోజుల}}లో $1 {{PLURAL:$1|చర్య|చర్యలు}}',
'activeusers-from' => 'వాడుకరులను ఇక్కడ నుండి చూపించు:',
'activeusers-hidebots' => 'బాట్లను దాచు',
'activeusers-hidesysops' => 'నిర్వాహకులను దాచు',
'activeusers-noresult' => 'వాడుకరులెవరూ లేరు.',

# Special:ListGroupRights
'listgrouprights' => 'వాడుకరి గుంపుల హక్కులు',
'listgrouprights-summary' => 'కింది జాబితాలో ఈ వికీలో నిర్వచించిన వాడుకరి గుంపులు, వాటికి సంబంధించిన హక్కులు ఉన్నాయి.
విడివిడిగా హక్కులకు సంబంధించిన మరింత సమాచారం [[{{MediaWiki:Listgrouprights-helppage}}]] వద్ద లభించవచ్చు.',
'listgrouprights-key' => 'సూచిక:
* <span class="listgrouprights-granted">ప్రసాదించిన హక్కు</span>
* <span class="listgrouprights-revoked">వెనక్కి తీసుకున్న హక్కు</span>',
'listgrouprights-group' => 'గుంపు',
'listgrouprights-rights' => 'హక్కులు',
'listgrouprights-helppage' => 'Help:గుంపు హక్కులు',
'listgrouprights-members' => '(సభ్యుల జాబితా)',
'listgrouprights-addgroup' => '{{PLURAL:$2|గుంపుని|గుంపులను}} చేర్చగలరు: $1',
'listgrouprights-removegroup' => '{{PLURAL:$2|గుంపుని|గుంపులను}} తొలగించగలరు: $1',
'listgrouprights-addgroup-all' => 'అన్ని గుంపులను చేర్చగలరు',
'listgrouprights-removegroup-all' => 'అన్ని గుంపులను తొలగించగలరు',
'listgrouprights-addgroup-self' => '{{PLURAL:$2|సమూహాన్ని|సమూహాలని}} తన స్వంత ఖాతాకి చేర్చుకోగలగడం: $1',
'listgrouprights-removegroup-self' => '{{PLURAL:$2|సమూహాన్ని|సమూహాలని}} తన స్వంత ఖాతా నుండి తొలగించుకోవడం: $1',
'listgrouprights-addgroup-self-all' => 'అన్ని సమూహాలని స్వంత ఖాతాకి చేర్చుకోలగడటం',
'listgrouprights-removegroup-self-all' => 'స్వంత ఖాతా నుండి అన్ని సమూహాలనూ తొలగించుకోగలగడం',

# Email user
'mailnologin' => 'పంపించవలసిన చిరునామా లేదు',
'mailnologintext' => 'ఇతరులకు ఈ-మెయిలు పంపించాలంటే, మీరు [[Special:UserLogin|లాగిన్‌]] అయి ఉండాలి, మరియు మీ [[Special:Preferences|అభిరుచుల]]లో సరైన ఈ-మెయిలు చిరునామా ఇచ్చి ఉండాలి.',
'emailuser' => 'ఈ వాడుకరికి ఈ-మెయిలుని పంపించండి',
'emailuser-title-target' => 'ఈ {{GENDER:$1|వాడుకరికి}} ఈమెయిలు పంపించండి',
'emailuser-title-notarget' => 'ఈ-మెయిలు వాడుకరి',
'emailpage' => 'వాడుకరికి ఈ-మెయిలుని పంపించు',
'emailpagetext' => 'వాడుకరికి ఈమెయిలు సందేశము పంపించుటకు క్రింది ఫారంను ఉపయోగించవచ్చు. [[Special:Preferences|మీ వాడుకరి అభిరుచుల]]లో మీరిచ్చిన ఈ-మెయిలు చిరునామా "నుండి" ఆ సందేశం వచ్చినట్లుగా ఉంటుంది, కనుక వేగుని అందుకునేవారు నేరుగా మీకు జవాబివ్వగలుగుతారు.',
'usermailererror' => 'మెయిలు ఆబ్జెక్టు ఈ లోపాన్ని చూపింది:',
'defemailsubject' => 'వాడుకరి "$1" నుండి {{SITENAME}} ఈ-మెయిలు',
'usermaildisabled' => 'వాడుకరి ఈ-మెయిళ్ళు అచేతనం చేసారు',
'usermaildisabledtext' => 'ఈ వికీలో మీరు ఇతర వాడుకరులకి ఈ-మెయిళ్ళని పంపించలేరు',
'noemailtitle' => 'ఈ-మెయిలు చిరునామా లేదు',
'noemailtext' => 'ఈ వాడుకరి సరైన ఈ-మెయిలు చిరునామాని ఇవ్వలేదు.',
'nowikiemailtitle' => 'ఈ-మెయిళ్ళను అనుమతించరు',
'nowikiemailtext' => 'ఇతర వాడుకరుల నుండి ఈ-మెయిళ్ళను అందుకోడానికి ఈ వాడుకరి సుముఖంగా లేరు.',
'emailnotarget' => 'గ్రహీతగా ఇచ్చిన వాడుకరిపేరు తప్పైనా కావచ్చు, లేదా అసలే ఉండి ఉండకపోవచ్చు',
'emailtarget' => 'అందుకొనేవారి వాడుకరిపేరు ఇవ్వండి',
'emailusername' => 'వాడుకరి పేరు:',
'emailusernamesubmit' => 'దాఖలుచెయ్యి',
'email-legend' => 'మరో {{SITENAME}} వాడుకరికి వేగు పంపించండి',
'emailfrom' => 'ఎవరు:',
'emailto' => 'ఎవరికి:',
'emailsubject' => 'విషయం:',
'emailmessage' => 'సందేశం:',
'emailsend' => 'పంపించు',
'emailccme' => 'సందేశపు ఒక ప్రతిని నాకు ఈమెయిలు పంపు.',
'emailccsubject' => '$1 కు మీరు పంపిన సందేశపు ప్రతి: $2',
'emailsent' => 'ఈ-మెయిలు పంపించాం',
'emailsenttext' => 'మీ ఈ-మెయిలు సందేశం పంపబడింది.',
'emailuserfooter' => 'ఈ ఈ-మెయిలుని $2 కి {{SITENAME}} లోని "వాడుకరికి ఈమెయిలు" అనే సౌలభ్యం ద్వారా $1 పంపించారు.',

# User Messenger
'usermessage-summary' => 'వ్యవస్థ సందేశాన్ని వదిలివేస్తున్నాం.',
'usermessage-editor' => 'వ్యవస్థ సందేశకులు',

# Watchlist
'watchlist' => 'వీక్షణ జాబితా',
'mywatchlist' => 'వీక్షణ జాబితా',
'watchlistfor2' => '$1 కొరకు $2',
'nowatchlist' => 'మీ వీక్షణ జాబితా ఖాళీగా ఉంది.',
'watchlistanontext' => 'మీ వీక్షణ జాబితా లోని అంశాలను చూసేందుకు లేదా మార్చేందుకు మీరు $1.',
'watchnologin' => 'లాగిన్‌ అయిలేరు',
'watchnologintext' => 'మీ వీక్షణ జాబితాను మార్చడానికి మీరు [[Special:UserLogin|లాగిన్‌]] అయి ఉండాలి.',
'addwatch' => 'వీక్షణ జాబితాలో చేర్చు',
'addedwatchtext' => "\"[[:\$1]]\" అనే పుట మీ [[Special:Watchlist|వీక్షణ జాబితా]]లో చేరింది.
భవిష్యత్తులో ఈ పుటకి మరియు సంబంధిత చర్చాపుటకి జరిగే మార్పులు అక్కడ కనిపిస్తాయి, మరియు  [[Special:RecentChanges|ఇటీవలి మార్పుల జాబితా]]లో సులభంగా గుర్తించడానికి ఈ పుట '''బొద్దుగా''' కనిపిస్తుంది.",
'removewatch' => 'వీక్షణ జాబితా నుండి తొలగించు',
'removedwatchtext' => '"[[:$1]]" అనే పేజీ [[Special:Watchlist|మీ వీక్షణ జాబితా]] నుండి తొలగించబడినది.',
'watch' => 'వీక్షించు',
'watchthispage' => 'ఈ పుట మీద కన్నేసి ఉంచు',
'unwatch' => 'వీక్షించవద్దు',
'unwatchthispage' => 'వీక్షణను ఆపు',
'notanarticle' => 'వ్యాసం పేజీ కాదు',
'notvisiblerev' => 'ఈ కూర్పును తొలగించాం',
'watchlist-details' => 'మీ వీక్షణ జాబితాలో {{PLURAL:$1|ఒక పేజీ ఉంది|$1 పేజీలు ఉన్నాయి}}, చర్చా పేజీలని వదిలేసి.',
'wlheader-enotif' => 'ఈ-మెయిలు ప్రకటనలు పంపబడతాయి.',
'wlheader-showupdated' => "మీ గత సందర్శన తరువాత మారిన పేజీలు '''బొద్దు'''గా చూపించబడ్డాయి.",
'watchmethod-recent' => 'వీక్షణ జాబితాలోని పేజీల కొరకు ఇటీవలి మార్పులు పరిశీలించబడుతున్నాయి',
'watchmethod-list' => 'ఇటీవలి మార్పుల కొరకు వీక్షణ జాబితాలోని పేజీలు పరిశీలించబడుతున్నాయి',
'watchlistcontains' => 'మీ వీక్షణ జాబితాలో {{PLURAL:$1|ఒక పేజీ ఉంది|$1 పేజీలు ఉన్నాయి}}.',
'iteminvalidname' => "'$1' తో ఇబ్బంది, సరైన పేరు కాదు...",
'wlshowlast' => 'గత $1 గంటలు $2 రోజులు $3 చూపించు',
'watchlist-options' => 'వీక్షణ జాబితా ఎంపికలు',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'గమనిస్తున్నాం...',
'unwatching' => 'వీక్షణ నుండి తొలగిస్తున్నా...',
'watcherrortext' => '"$1" కు మీ సెట్టింగులను మార్చేటపుడు ఏదో లోపం దొర్లింది.',

'enotif_mailer' => '{{SITENAME}} ప్రకటన మెయిలు పంపునది',
'enotif_reset' => 'అన్ని పేజీలను చూసినట్లుగా గుర్తించు',
'enotif_impersonal_salutation' => '{{SITENAME}} వాడుకరి',
'enotif_subject_deleted' => '{{SITENAME}} $1 పేజీని $2 {{GENDER:$2|తొలగించారు}}',
'enotif_subject_created' => '{{SITENAME}} $1 పేజీని $2 {{GENDER:$2|సృష్టించారు}}',
'enotif_subject_moved' => '{{SITENAME}} $1 పేజీని $2 {{GENDER:$2|తరలించారు}}',
'enotif_subject_restored' => '{{SITENAME}} $1 పేజీని $2 {{GENDER:$2|పునస్థాపించారు}}',
'enotif_subject_changed' => '{{SITENAME}} $1 పేజీని $2 {{GENDER:$2|మార్చారు}}',
'enotif_body_intro_deleted' => '{{SITENAME}} $1 పేజీని $PAGEEDITDATE న $2 {{GENDER:$2|తొలగించారు}}, $3 చూడండి.',
'enotif_body_intro_created' => '{{SITENAME}} $1 పేజీని $PAGEEDITDATE న $2 {{GENDER:$2|సృష్టించారు}}, ప్రస్తుత కూర్పు కోసం $3 చూడండి.',
'enotif_body_intro_moved' => '{{SITENAME}} $1 పేజీని $PAGEEDITDATE న $2 {{GENDER:$2|తరలించారు}}, ప్రస్తుత కూర్పు కోసం $3 చూడండి.',
'enotif_body_intro_restored' => '{{SITENAME}} $1 పేజీని $PAGEEDITDATE న $2 {{GENDER:$2|పునస్థాపించారు}}, ప్రస్తుత కూర్పు కోసం $3 చూడండి.',
'enotif_body_intro_changed' => '{{SITENAME}} $1 పేజీని $PAGEEDITDATE న $2 {{GENDER:$2|మార్చారు}}, ప్రస్తుత కూర్పు కోసం $3 చూడండి.',
'enotif_lastvisited' => 'మీ గత సందర్శన తరువాత జరిగిన మార్పుల కొరకు $1 చూడండి.',
'enotif_lastdiff' => 'ఈ మార్పు చూసేందుకు  $1 కు వెళ్ళండి.',
'enotif_anon_editor' => 'అజ్ఞాత వాడుకరి $1',
'enotif_body' => 'ప్రియమైన $WATCHINGUSERNAME,


{{SITENAME}}లో $PAGETITLE అనే పేజీని $PAGEEDITDATE సమయానికి $PAGEEDITOR $CHANGEDORCREATED, ప్రస్తుత కూర్పు కొరకు $PAGETITLE_URL చూడండి.

$NEWPAGE

రచయిత సారాంశం: $PAGESUMMARY $PAGEMINOREDIT

రచయితను సంప్రదించండి:
మెయిలు: $PAGEEDITOR_EMAIL
వికీ: $PAGEEDITOR_WIKI

మీరు ఈ పేజీకి వెళ్తే తప్ప ఇక ముందు ఈ పేజీకి జరిగే మార్పుల గురించిన వార్తలను మీకు పంపించము. మీ వీక్షణజాబితా లోని అన్ని పేజీలకు ఉన్న గమనింపు జెండాలను మార్చుకోవచ్చు.

             మీ స్నేహపూర్వక {{SITENAME}} గమనింపుల వ్యవస్థ

--
మీ వీక్షణజాబితా అమరికలను మార్చుకునేందుకు,
{{canonicalurl:{{#special:EditWatchlist}}}} ని చూడండి.

ఈ పేజీని మీ వీక్షణజాబితా నుండి తొలగించుకునేందుకు,
$UNWATCHURL కి వెళ్ళండి.

మీ అభిప్రాయాలు చెప్పేందుకు మరియు మరింత సహాయానికై:
{{canonicalurl:{{MediaWiki:helppage}}}}',
'created' => 'సృష్టించారు',
'changed' => 'మార్చారు',

# Delete
'deletepage' => 'పేజీని తొలగించు',
'confirm' => 'ధృవీకరించు',
'excontent' => "ఇదివరకు విషయ సంగ్రహం: '$1'",
'excontentauthor' => 'ఉన్న విషయ సంగ్రహం: "$1" (మరియు దీని ఒకే ఒక్క రచయిత "[[Special:Contributions/$2|$2]]")',
'exbeforeblank' => "ఖాళీ చెయ్యకముందు పేజీలో ఉన్న విషయ సంగ్రహం: '$1'",
'exblank' => 'పేజీ ఖాళీగా ఉంది',
'delete-confirm' => '"$1"ని తొలగించు',
'delete-legend' => 'తొలగించు',
'historywarning' => "'''హెచ్చరిక''': మీరు తొలగించబోయే పేజీకి సుమారు $1 {{PLURAL:$1|కూర్పుతో|కూర్పులతో}} చరిత్ర ఉంది:",
'confirmdeletetext' => 'మీరో పేజీనో, బొమ్మనో దాని చరిత్రతోపాటుగా శాశ్వతంగా డేటాబేసు నుండి తీసెయ్యబోతున్నారు. మీరు చెయ్యదలచింది ఇదేననీ, దీని పర్యవసానాలు మీకు తెలుసనీ, దీన్ని [[{{MediaWiki:Policy-url}}|నిభందనల]] ప్రకారమే చేస్తున్నారనీ నిర్ధారించుకోండి.',
'actioncomplete' => 'పని పూర్తయింది',
'actionfailed' => 'చర్య విఫలమైంది',
'deletedtext' => '"$1" తుడిచివేయబడింది. ఇటీవలి తుడిచివేతలకు సంబంధించిన నివేదిక కొరకు $2 చూడండి.',
'dellogpage' => 'తొలగింపుల చిట్టా',
'dellogpagetext' => 'ఇది ఇటీవలి తుడిచివేతల జాబితా.',
'deletionlog' => 'తొలగింపుల చిట్టా',
'reverted' => 'పాత కూర్పుకు తీసుకువెళ్ళాం.',
'deletecomment' => 'కారణం:',
'deleteotherreason' => 'ఇతర/అదనపు కారణం:',
'deletereasonotherlist' => 'ఇతర కారణం',
'deletereason-dropdown' => '* తొలగింపుకి సాధారణ కారణాలు
** స్పాము
** దుశ్చర్య
** కాపీహక్కుల ఉల్లంఘన
** రచయిత అభ్యర్థన
** తెగిపోయిన దారిమార్పు',
'delete-edit-reasonlist' => 'తొలగింపు కారణాలని మార్చండి',
'delete-toobig' => 'ఈ పేజీకి $1 {{PLURAL:$1|కూర్పుకు|కూర్పులకు}} మించిన, చాలా పెద్ద దిద్దుబాటు చరితం ఉంది. {{SITENAME}}కు అడ్డంకులు కలగడాన్ని నివారించేందుకు గాను, అలాంటి పెద్ద పేజీల తొలగింపును నియంత్రించాం.',
'delete-warning-toobig' => 'ఈ పేజీకి $1 {{PLURAL:$1|కూర్పుకు|కూర్పులకు}} మించిన, చాలా పెద్ద దిద్దుబాటు చరితం ఉంది. దాన్ని తొలగిస్తే {{SITENAME}}కి చెందిన డేటాబేసు కార్యాలకు ఆటంకం కలగొచ్చు; అప్రమత్తతో ముందుకుసాగండి.',
'deleting-backlinks-warning' => "'''హెచ్చరిక:''' మీరు తొలగించబోతున్న పేజీకి ఇతర పేజీల నుండి లింకులు ఉన్నాయి.",

# Rollback
'rollback' => 'దిద్దుబాట్లను రద్దుచేయి',
'rollback_short' => 'రద్దుచేయి',
'rollbacklink' => 'రద్దుచేయి',
'rollbacklinkcount' => '$1 {{PLURAL:$1|మార్పును|మార్పులను}} రద్దుచేయి',
'rollbacklinkcount-morethan' => '$1 కంటే ఎక్కువ {{PLURAL:$1|మార్పును|మార్పులను}} రద్దుచేయి',
'rollbackfailed' => 'రద్దుచేయటం విఫలమైంది',
'cantrollback' => 'రచనను వెనక్కి తీసుకువెళ్ళలేము; ఈ పేజీకి ఇదొక్కటే రచన.',
'alreadyrolled' => '[[:$1]]లో [[User:$2|$2]] ([[User talk:$2|చర్చ]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]) చేసిన చివరి మార్పును రద్దు చెయ్యలేము;
మరెవరో ఆ పేజీని వెనక్కి మళ్ళించారు, లేదా మార్చారు.

చివరి మార్పులు చేసినవారు: [[User:$3|$3]] ([[User talk:$3|చర్చ]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment' => "దిద్దుబాటు సారాశం: \"''\$1''\".",
'revertpage' => '[[Special:Contributions/$2|$2]] ([[User talk:$2|చర్చ]]) చేసిన మార్పులను [[User:$1|$1]] యొక్క చివరి కూర్పు వరకు తిప్పికొట్టారు.',
'revertpage-nouser' => '(తొలగించిన వాడుకరిపేరు) చేసిన మార్పులను [[User:$1|$1]] యొక్క చివరి కూర్పుకి తిప్పికొట్టారు',
'rollback-success' => '$1 చేసిన దిద్దుబాట్లను వెనక్కు తీసుకెళ్ళాం; తిరిగి $2 చేసిన చివరి కూర్పుకు మార్చాం.',

# Edit tokens
'sessionfailure-title' => 'సెషను వైఫల్యం',
'sessionfailure' => 'మీ ప్రవేశపు సెషనుతో ఏదో సమస్య ఉన్నట్లుంది;
సెషను హైజాకు కాకుండా ఈ చర్యను రద్దు చేసాం.
"back" కొట్టి, ఎక్కడి నుండి వచ్చారో ఆ పేజీని మళ్ళీ లోడు చేసి, తిరిగి ప్రయత్నించండి.',

# Protect
'protectlogpage' => 'సంరక్షణల చిట్టా',
'protectlogtext' => 'ఈ క్రింద ఉన్నది పేజీల సంరక్షణలకు జరిగిన మార్పుల జాబితా.
ప్రస్తుతం అమలులో ఉన్న సంరక్షణలకై [[Special:ProtectedPages|సంరక్షిత పేజీల జాబితా]]ను చూడండి.',
'protectedarticle' => '"[[$1]]" సంరక్షించబడింది.',
'modifiedarticleprotection' => '"[[$1]]" సరక్షణ స్థాయిని మార్చాం',
'unprotectedarticle' => '"[[$1]]" యొక్క సంరక్షణను తొలగించారు',
'movedarticleprotection' => 'సంరక్షణా అమరికని "[[$2]]" నుండి "[[$1]]"కి మార్చారు',
'protect-title' => '"$1" యొక్క సంరక్షణ స్థాయి అమర్పు',
'protect-title-notallowed' => '"$1" యొక్క సంరక్షణ స్థాయి',
'prot_1movedto2' => '$1, $2కు తరలించబడింది',
'protect-badnamespace-title' => 'సంరక్షించజాలని పేరుబరి',
'protect-badnamespace-text' => 'ఈ పేరుబరిలో ఉన్న పేజీలను సంరక్షించలేరు.',
'protect-norestrictiontypes-title' => 'సంరక్షించజాలని పేజీ',
'protect-legend' => 'సంరక్షణను నిర్ధారించు',
'protectcomment' => 'కారణం:',
'protectexpiry' => 'గడువు:',
'protect_expiry_invalid' => 'గడువు సమయాన్ని సరిగ్గా ఇవ్వలేదు.',
'protect_expiry_old' => 'మీరిచ్చిన గడువు ప్రస్తుత సమయం కంటే ముందు ఉంది.',
'protect-unchain-permissions' => 'మరిన్ని సంరక్షణ వికల్పాలను తెరువు',
'protect-text' => "ఈ పెజీ '''$1''' ఎంత సంరక్షణలొ వుందో మీరు ఇక్కడ చూడవచ్చు, మార్చవచ్చు.",
'protect-locked-blocked' => "నిరోధించబడి ఉండగా మీరు సంరక్షణ స్థాయిని మార్చలేరు. ప్రస్తుతం '''$1''' పేజీకి ఉన్న సెట్టింగులివి:",
'protect-locked-dblock' => "ప్రస్తుతం అమల్లో ఉన్న డేటాబేసు లాకు కారణంగా సంరక్షణ స్థాయిని సెట్ చెయ్యడం కుదరదు. ప్రస్తుతం '''$1''' పేజీకి ఉన్న సెట్టింగులివి:",
'protect-locked-access' => "మీ ఖాతకు పేజీ రక్షన స్థాయిని మార్చే హక్కులు లేవు.
'''$1''' అనే పేరున్న ఈ పేజీకి ప్రస్తుతం ఈ రక్షణ ఉంది:",
'protect-cascadeon' => 'ఈ పేజీ కాస్కేడింగు రక్షణలో ఉన్న ఈ కింది {{PLURAL:$1|పేజీకి|పేజీలకు}} జతచేయటం వలన, ప్రస్తుతం రక్షణలో ఉంది.  మీరు ఈ పేజీ యొక్క రక్షణ స్థాయిన మార్చవచ్చు, దాని వలన కాస్కేడింగు రక్షణకు ఎటువంటి సమస్య ఉండదు.',
'protect-default' => 'అందరు వాడుకరులను అనుమతించు',
'protect-fallback' => '"$1" అనుమతి ఉన్న వాడుకరులను మాత్రమే అనుమతించు',
'protect-level-autoconfirmed' => 'స్వయన్నిర్ధారిత వాడుకరులను మాత్రమే అనుమతించు',
'protect-level-sysop' => 'నిర్వాహకులను మాత్రమే అనుమతించు',
'protect-summary-cascade' => 'కాస్కేడింగు',
'protect-expiring' => '$1 (UTC)న కాలంచెల్లుతుంది',
'protect-expiring-local' => '$1న కాలంచెల్లుతుంది',
'protect-expiry-indefinite' => 'నిరవధికం',
'protect-cascade' => 'ఈ పేజీకి జతపరిచిన పేజీలను కూడా రక్షించు (కాస్కేడింగు రక్షణ)',
'protect-cantedit' => 'ఈ పేజీ యొక్క సంరక్షణా స్థాయిని మీరు మార్చలేరు, ఎందుకంటే దాన్ని మార్చే అనుమతి మీకు లేదు.',
'protect-othertime' => 'ఇతర సమయం:',
'protect-othertime-op' => 'ఇతర సమయం',
'protect-existing-expiry' => 'ప్రస్తుత కాల పరిమితి: $3, $2',
'protect-otherreason' => 'ఇతర/అదనపు కారణం:',
'protect-otherreason-op' => 'ఇతర కారణం',
'protect-dropdown' => '*సాధారణ సంరక్షణ కారణాలు
** అత్యధిక వాండలిజం
** అత్యధిక స్పామింగు
** నిర్మాణాత్మకంగా లేని మార్పుల యుద్ధం
** అధిక రద్దీగల పేజీ',
'protect-edit-reasonlist' => 'సంరక్షణా కారణాలని మార్చండి',
'protect-expiry-options' => '1 గంట:1 hour,1 రోజు:1 day,1 వారం:1 week,2 వారాలు:2 weeks,1 నెల:1 month,3 నెలలు:3 months,6 నెలలు:6 months,1 సంవత్సరం:1 year,ఎప్పటికీ:infinite',
'restriction-type' => 'అనుమతి:',
'restriction-level' => 'నియంత్రణ స్థాయి:',
'minimum-size' => 'కనీస పరిమాణం',
'maximum-size' => 'గరిష్ఠ పరిమాణం',
'pagesize' => '(బైట్లు)',

# Restrictions (nouns)
'restriction-edit' => 'మార్చు',
'restriction-move' => 'తరలించు',
'restriction-create' => 'సృష్టించు',
'restriction-upload' => 'ఎక్కించు',

# Restriction levels
'restriction-level-sysop' => 'పూర్తి సంరక్షణ',
'restriction-level-autoconfirmed' => 'అర్థ సంరక్షణ',
'restriction-level-all' => 'ఏ స్థాయి అయినా',

# Undelete
'undelete' => 'తుడిచివేయబడ్డ పేజీలను చూపించు',
'undeletepage' => 'తుడిచివేయబడిన పేజీలను చూపించు, పునఃస్థాపించు',
'undeletepagetitle' => "'''క్రింద చూపిస్తున్నవి [[:$1]] యొక్క తొలగించిన మార్పులు'''.",
'viewdeletedpage' => 'తొలగించిన పేజీలను చూడండి',
'undeletepagetext' => 'క్రింది {{PLURAL:$1|పేజీని|$1 పేజీలను}} తొలగించారు, కానీ పునఃస్థాపనకు వీలుగా భండాగారంలో ఉన్నాయి.
భండాగారం నిర్ణీత వ్యవధులలో పూర్తిగా ఖాళీ చేయబడుతుంటుంది.',
'undelete-fieldset-title' => 'కూర్పులను పునఃస్థాపించండి',
'undeleteextrahelp' => "పేజీ యొక్క మొత్తం చరిత్రను పునస్థాపించేందుకు, చెక్ బాక్సులన్నిటినీ ఖాళీగా ఉంచి, '''''{{int:undeletebtn}}''''' నొక్కండి.
కొన్ని కూర్పులను మాత్రమే పుసస్థాపించదలిస్తే, సదరు కూర్పులకు ఎదురుగా ఉన్న చెక్ బాక్సులలో టిక్కు పెట్టి, '''''{{int:undeletebtn}}''''' నొక్కండి.",
'undeleterevisions' => '$1 {{PLURAL:$1|కూర్పును|కూర్పులను}} భాండారానికి చేర్చాం',
'undeletehistory' => 'పేజీని పునఃస్థాపిస్తే, అన్ని సంచికలూ పేజీచరిత్ర దినచర్యలోకి పునఃస్థాపించబడతాయి.
తుడిచివేయబడిన తరువాత, అదే పేరుతో వేరే పేజీ సృష్టించబడి ఉంటే, పునఃస్థాపించిన సంచికలు ముందరి చరిత్రలోకి వెళ్తాయి.',
'undeleterevdel' => 'తొలగింపును రద్దు చేస్తున్నప్పుడు, అన్నిటికంటే పైనున్న కూర్పు పాక్షికంగా తొలగింపబడే పక్షంలో తొలగింపు-రద్దు జరగదు. అటువంటి సందర్భాల్లో, తొలగించిన కూర్పులలో కొత్తవాటిని ఎంచుకోకుండా ఉండాలి, లేదా దాపు నుండి తీసెయ్యాలి.',
'undeletehistorynoadmin' => 'ఈ పుటని తొలగించివున్నారు.
తొలగింపునకు కారణం, తొలగింపునకు క్రితం ఈ పుటకి మార్పులు చేసిన వాడుకరుల వివరాలతో సహా, ఈ కింద సారాంశంలో చూపబడింది.
తొలగించిన కూర్పులలోని వాస్తవ పాఠ్యం నిర్వాహకులకు మాత్రమే అందుబాటులో ఉంటుంది.',
'undelete-revision' => '$1 యొక్క తొలగించబడిన కూర్పు (చివరగా $4 నాడు, $5కి $3 మార్చారు):',
'undeleterevision-missing' => 'తప్పుడు లేదా తప్పిపోయిన కూర్పు. మీరు నొక్కింది తప్పుడు లింకు కావచ్చు, లేదా భాండాగారం నుండి కూర్పు పునఃస్థాపించబడి లేదా తొలగించబడి ఉండవచ్చు.',
'undelete-nodiff' => 'గత కూర్పులేమీ లేవు.',
'undeletebtn' => 'పునఃస్థాపించు',
'undeletelink' => 'చూడండి/పునస్థాపించండి',
'undeleteviewlink' => 'చూడండి',
'undeleteinvert' => 'ఎంపికని తిరగవెయ్యి',
'undeletecomment' => 'కారణం:',
'undeletedrevisions' => '{{PLURAL:$1|ఒక సంచిక|$1 సంచికల}} పునఃస్థాపన జరిగింది',
'undeletedrevisions-files' => '{{PLURAL:$1|ఒక కూర్పు|$1 కూర్పులు}} మరియు {{PLURAL:$2|ఒక ఫైలు|$2 ఫైళ్ళ}}ను పునస్థాపించాం',
'undeletedfiles' => '{{PLURAL:$1|ఒక ఫైలును|$1 ఫైళ్లను}} పునఃస్థాపించాం',
'cannotundelete' => 'తొలగింపు రద్దు విఫలమైంది:
$1',
'undeletedpage' => "'''$1 ను పునస్థాపించాం'''

ఇటీవల జరిగిన తొలగింపులు, పునస్థాపనల కొరకు [[Special:Log/delete|తొలగింపు చిట్టా]]ని చూడండి.",
'undelete-header' => 'ఇటీవల తొలగించిన పేజీల కొరకు [[Special:Log/delete|తొలగింపు చిట్టా]]ని చూడండి.',
'undelete-search-title' => 'తొలగించిన పేజీల అన్వేషణ',
'undelete-search-box' => 'తొలగించిన పేజీలను వెతుకు',
'undelete-search-prefix' => 'దీనితో మొదలయ్యే పేజీలు చూపించు:',
'undelete-search-submit' => 'వెతుకు',
'undelete-no-results' => 'తొలగింపు సంగ్రహాల్లో దీనిని పోలిన పేజీలు లేవు.',
'undelete-filename-mismatch' => '$1 టైమ్‌స్టాంపు కలిగిన ఫైలుకూర్పు తొలగింపును రద్దు చెయ్యలేకపోయాం: ఫైలుపేరు సరిపోలలేదు',
'undelete-bad-store-key' => '$1 టైమ్‌స్టాంపు కలిగిన ఫైలు తొలగింపును రద్దు చెయ్యలేకున్నాం: తొలగింపుకు ముందే ఫైలు కనబడటం లేదు.',
'undelete-cleanup-error' => 'వాడని భాండారం ఫైలు "$1" తొలగింపును రద్దు చెయ్యడంలో లోపం దొర్లింది.',
'undelete-missing-filearchive' => 'ID $1 కలిగిన భాండారం ఫైలు డేటాబేసులో లేకపోవడం చేత దాన్ని పునస్థాపించలేకున్నాం. దాని తొలగింపును ఇప్పటికే రద్దుపరచి ఉండవచ్చు.',
'undelete-error-short' => 'ఫైలు $1 తొలగింపును రద్దు పరచడంలో లోపం దొర్లింది',
'undelete-error-long' => 'ఫైలు $1 తొలగింపును రద్దు పరచడంలో లోపాలు దొర్లాయి',
'undelete-show-file-confirm' => '$2 నాడు $3 సమయాన ఉన్న "<nowiki>$1</nowiki>" ఫైలు యొక్క తొలగించిన కూర్పుని మీరు నిజంగానే చూడాలనుకుంటున్నారా?',
'undelete-show-file-submit' => 'అవును',

# Namespace form on various pages
'namespace' => 'పేరుబరి:',
'invert' => 'ఎంపికను తిరగవెయ్యి',
'tooltip-invert' => 'ఎంచుకున్న పేరుబరి (చెక్ చేసి ఉంటే అనుబంధ పేరుబరి కూడా) లోని పేజీల్లో జరిగిన మార్పులను దాచేందుకు ఈ పెట్టెను చెక్ చెయ్యండి',
'namespace_association' => 'సంబంధిత పేరుబరి',
'blanknamespace' => '(మొదటి)',

# Contributions
'contributions' => '{{GENDER:$1|వాడుకరి}} రచనలు',
'contributions-title' => '$1 యొక్క మార్పులు-చేర్పులు',
'mycontris' => 'మార్పులు చేర్పులు',
'contribsub2' => '{{GENDER:$3|$1}} ($2) కొరకు',
'nocontribs' => 'ఈ విధమైన మార్పులేమీ దొరకలేదు.',
'uctop' => '(ప్రస్తుత)',
'month' => 'ఈ నెల నుండి (అంతకు ముందువి):',
'year' => 'ఈ సంవత్సరం నుండి (అంతకు ముందువి):',

'sp-contributions-newbies' => 'కొత్త ఖాతాల యొక్క రచనలని మాత్రమే చూపించు',
'sp-contributions-newbies-sub' => 'కొత్తవారి కోసం',
'sp-contributions-newbies-title' => 'కొత్త ఖాతాల వాడుకరుల మార్పుచేర్పులు',
'sp-contributions-blocklog' => 'నిరోధాల చిట్టా',
'sp-contributions-deleted' => 'తొలగించబడిన వాడుకరి రచనలు',
'sp-contributions-uploads' => 'ఎక్కింపులు',
'sp-contributions-logs' => 'చిట్టాలు',
'sp-contributions-talk' => 'చర్చ',
'sp-contributions-userrights' => 'వాడుకరి హక్కుల నిర్వహణ',
'sp-contributions-blocked-notice' => 'ఈ వాడుకరిపై ప్రస్తుతం నిరోధం ఉంది.
నిరోధపు చిట్టాలోని చివరి పద్దుని మీ సమాచారంకోసం ఇస్తున్నాం:',
'sp-contributions-blocked-notice-anon' => 'ఈ ఐపీ చిరునామాపై ప్రస్తుతం నిరోధం ఉంది.
నిరోధపు చిట్టాలోని చివరి పద్దుని మీ సమాచారంకోసం ఇస్తున్నాం:',
'sp-contributions-search' => 'రచనల కోసం అన్వేషణ',
'sp-contributions-username' => 'ఐపీ చిరునామా లేదా వాడుకరిపేరు:',
'sp-contributions-toponly' => 'చిట్టచివరి కూర్పులను మాత్రమే చూపించు',
'sp-contributions-submit' => 'వెతుకు',

# What links here
'whatlinkshere' => 'ఇక్కడికి లంకెలున్నవి',
'whatlinkshere-title' => '"$1"కి లింకున్న పుటలు',
'whatlinkshere-page' => 'పేజీ:',
'linkshere' => "కిందనున్న పేజీల నుండి '''[[:$1]]'''కు లింకులు ఉన్నాయి:",
'nolinkshere' => "'''[[:$1]]'''కు ఏ పేజీ నుండీ లింకు లేదు.",
'nolinkshere-ns' => "'''[[:$1]]''' పేజీకి లింకయ్యే పేజీలు ఎంచుకున్న నేంస్పేసులో లేవు.",
'isredirect' => 'దారిమార్పు పుట',
'istemplate' => 'పేజీకి జతపరిచారు',
'isimage' => 'దస్త్రపు లంకె',
'whatlinkshere-prev' => '{{PLURAL:$1|మునుపటిది|మునుపటి $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|తరువాతది|తరువాతి $1}}',
'whatlinkshere-links' => '← లంకెలు',
'whatlinkshere-hideredirs' => 'దారిమార్పులను $1',
'whatlinkshere-hidetrans' => '$1 ట్రాన్స్‌క్లూజన్లు',
'whatlinkshere-hidelinks' => 'లింకులను $1',
'whatlinkshere-hideimages' => '$1 దస్త్రాల లంకెలు',
'whatlinkshere-filters' => 'వడపోతలు',

# Block/unblock
'autoblockid' => 'tanaDDu #$1',
'block' => 'వాడుకరి నిరోధం',
'unblock' => 'వాడుకరిపై నిరోధాన్ని తీసెయ్యండి',
'blockip' => 'వాడుకరి నిరోధం',
'blockip-legend' => 'వాడుకరి నిరోధం',
'blockiptext' => 'ఏదైనా ప్రత్యేక ఐపీ చిరునామానో లేదా వాడుకరిపేరునో రచనలు చెయ్యకుండా నిరోధించాలంటే కింది ఫారాన్ని వాడండి.
కేవలం దుశ్చర్యల నివారణ కోసం మాత్రమే దీన్ని వాడాలి, అదికూడా [[{{MediaWiki:Policy-url}}|విధానాన్ని]] అనుసరించి మాత్రమే.
స్పష్టమైన కారణాన్ని కింద రాయండి (ఉదాహరణకు, దుశ్చర్యలకు పాల్పడిన పేజీలను ఉదహరించండి).',
'ipadressorusername' => 'ఐపీ చిరునామా లేదా వాడుకరిపేరు:',
'ipbexpiry' => 'అంతమయ్యే గడువు',
'ipbreason' => 'కారణం:',
'ipbreason-dropdown' => '*సాధారణ నిరోధ కారణాలు
** తప్పు సమాచారాన్ని చొప్పించడం
** పేజీల్లోని సమాచారాన్ని తీసెయ్యడం
** బయటి సైట్లకు లంకెలతో స్పాము చెయ్యడం
** పేజీల్లోకి చెత్తను ఎక్కించడం
** బెదిరింపు ప్రవర్తన/వేధింపులు
** అనేక ఖాతాలను సృష్టించి దుశ్చర్యకు పాల్పడడం
** అనుచితమైన వాడుకరి పేరు
** అదుపు తప్పిన బాటు',
'ipb-hardblock' => 'లాగినై ఉన్న వాడుకరులు ఈ ఐపీ అడ్రసు నుంచి మార్పుచేర్పులు చెయ్యకుండా నిరోధించండి',
'ipbcreateaccount' => 'ఖాతా సృష్టింపుని నివారించు',
'ipbemailban' => 'వాడుకరిని ఈ-మెయిల్ చెయ్యకుండా నివారించు',
'ipbenableautoblock' => 'ఈ వాడుకరి వాడిన చివరి ఐపీ అడ్రసును, అలాగే ఆ తరువాత వాడే అడ్రసులను కూడా ఆటోమాటిగ్గా నిరోధించు',
'ipbsubmit' => 'ఈ సభ్యుని నిరోధించు',
'ipbother' => 'వేరే గడువు',
'ipboptions' => '2 గంటలు:2 hours,1 రోజు:1 day,3 రోజులు:3 days,1 వారం:1 week,2 వారాలు:2 weeks,1 నెల:1 month,3 నెలలు:3 months,6 నెలలు:6 months,1 సంవత్సరం:1 year,ఎప్పటికీ:infinite',
'ipbhidename' => 'మార్పులు మరియు జాబితాల నుండి ఈ వాడుకరిపేరుని దాచు',
'ipbwatchuser' => 'ఈ సభ్యుని సభ్యుని పేజీ, చర్చాపేజీలను వీక్షణలో ఉంచు',
'ipb-disableusertalk' => 'నిరోధంలో ఉండగా ఈ వాడుకరి తన స్వంత చర్చ పేజీలో మార్పుచేర్పులు చెయ్యకుండా నిరోధించు',
'ipb-change-block' => 'ఈ అమరికలతో వాడుకరిని పునర్నిరోధించు',
'ipb-confirm' => 'నిరోధాన్ని ధృవపరచండి',
'badipaddress' => 'సరైన ఐ.పి. అడ్రసు కాదు',
'blockipsuccesssub' => 'నిరోధం విజయవంతం అయింది',
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]] నిరోధించబడింది.
<br />నిరోధాల సమీక్ష కొరకు [[Special:BlockList|ఐ.పి. నిరొధాల జాబితా]] చూడండి.',
'ipb-blockingself' => 'మిమ్మల్ని మీరే నిరోధించుకోబోతున్నారు! అదే మీ నిశ్చయమా?',
'ipb-edit-dropdown' => 'నిరోధపు కారణాలను మార్చండి',
'ipb-unblock-addr' => '$1 పై ఉన్న నిరోధాన్ని తొలగించండి',
'ipb-unblock' => 'వాడుకరి పేరుపై లేదా ఐపీ చిరునామాపై ఉన్న నిరోధాన్ని తొలగించండి',
'ipb-blocklist' => 'అమల్లో ఉన్న నిరోధాలను చూపించు',
'ipb-blocklist-contribs' => '$1 యొక్క మార్పులు-చేర్పులు',
'unblockip' => 'సభ్యునిపై నిరోధాన్ని తొలగించు',
'unblockiptext' => 'కింది ఫారం ఉపయోగించి, నిరోధించబడిన ఐ.పీ. చిరునామా లేదా సభ్యునికి తిరిగి రచనలు చేసే అధికారం ఇవ్వవచ్చు.',
'ipusubmit' => 'ఈ నిరోధాన్ని తొలగించు',
'unblocked' => '[[User:$1|$1]]పై నిరోధం తొలగించబడింది',
'unblocked-range' => '$1 పై నిరోధాన్ని తీసేసాం',
'unblocked-id' => '$1 అనే నిరోధాన్ని తొలగించాం',
'blocklist' => 'నిరోధిత వాడుకరులు',
'ipblocklist' => 'నిరోధించబడిన వాడుకరులు',
'ipblocklist-legend' => 'నిరోధించబడిన వాడుకరిని వెతకండి',
'blocklist-userblocks' => 'ఖాతా నిరోధాలను దాచు',
'blocklist-tempblocks' => 'తాత్కాలిక నిరోధాలను దాచు',
'blocklist-addressblocks' => 'ఏకైక ఐపీ నిరోధాలను దాచు',
'blocklist-timestamp' => 'కాలముద్ర',
'blocklist-target' => 'గమ్యం',
'blocklist-expiry' => 'కాలం చేల్లేది',
'blocklist-by' => 'నిర్వాహకుని నిరోధం',
'blocklist-params' => 'నిరోధపు పరామితులు',
'blocklist-reason' => 'కారణం',
'ipblocklist-submit' => 'వెతుకు',
'ipblocklist-localblock' => 'స్థానిక నిరోధం',
'ipblocklist-otherblocks' => 'ఇతర {{PLURAL:$1|నిరోధం|నిరోధాలు}}',
'infiniteblock' => 'అనంతం',
'expiringblock' => '$1 నాడు $2కి కాలం చెల్లుతుంది',
'anononlyblock' => 'అజ్ఞాతవ్యక్తులు మాత్రమే',
'noautoblockblock' => 'ఆటోమాటిక్ నిరోధాన్ని అశక్తం చేసాం',
'createaccountblock' => 'ఖాతా తెరవడాన్ని నిరోధించాము',
'emailblock' => 'ఈ-మెయిలుని నిరోధించాం',
'blocklist-nousertalk' => 'తమ చర్చాపేజీని మార్చలేరు',
'ipblocklist-empty' => 'నిరోధపు జాబితా ఖాళీగా ఉంది.',
'ipblocklist-no-results' => 'మీరడిగిన ఐపీ అడ్రసు లేదా సభ్యనామాన్ని నిరోధించలేదు.',
'blocklink' => 'నిరోధించు',
'unblocklink' => 'నిరోధాన్ని ఎత్తివేయి',
'change-blocklink' => 'నిరోధాన్ని మార్చండి',
'contribslink' => 'రచనలు',
'emaillink' => 'ఈ-మెయిలును పంపించు',
'autoblocker' => 'మీ ఐ.పీ. అడ్రసును "[[User:$1|$1]]" ఇటీవల వాడుట చేత, అది ఆటోమాటిక్‌గా నిరోధించబడినది. $1ను నిరోధించడానికి కారణం: "\'\'\'$2\'\'\'"',
'blocklogpage' => 'నిరోధాల చిట్టా',
'blocklog-showlog' => 'ఈ వాడుకరిని గతంలో నిరోధించారు.
మీ సమాచారం కోసం నిరోధపు చిట్టాని క్రింద ఇచ్చాం:',
'blocklog-showsuppresslog' => 'ఈ వాడుకరిని గతంలో నిరోధించి, దాచి ఉంచారు.
వివరాల కోసం అణచివేత చిట్టా కింద చూపబడింది:',
'blocklogentry' => '"[[$1]]" పై నిరోధం అమలయింది. నిరోధ కాలం $2 $3',
'reblock-logentry' => '[[$1]] కై నిరోధపు అమరికలను $2 $3 గడువుతో మార్చారు',
'blocklogtext' => 'వాడుకరుల నిరోధాలు, పునస్థాపనల చిట్టా ఇది. ఆటోమాటిక్‌గా నిరోధానికి గురైన ఐ.పి. చిరునామాలు ఈ జాబితాలో ఉండవు. ప్రస్తుతం అమల్లో ఉన్న నిరోధాలు, నిషేధాల కొరకు [[Special:BlockList|ఐ.పి. నిరోధాల జాబితా]]ను చూడండి.',
'unblocklogentry' => '$1పై నిరోధం తొలగించబడింది',
'block-log-flags-anononly' => 'అజ్ఞాత వాడుకర్లు మాత్రమే',
'block-log-flags-nocreate' => 'ఖాతా సృష్టించడాన్ని అశక్తం చేసాం',
'block-log-flags-noautoblock' => 'ఆటోమాటిక్ నిరోధాన్ని అశక్తం చేసాం',
'block-log-flags-noemail' => 'ఈ-మెయిలుని నిరోధించాం',
'block-log-flags-nousertalk' => 'తమ చర్చాపేజీని మార్చలేరు',
'block-log-flags-angry-autoblock' => 'మరింత ధృడమైన స్వయంనిరోధకం సచేతనం చేయబడింది',
'block-log-flags-hiddenname' => 'వాడుకరిపేరుని దాచారు',
'range_block_disabled' => 'శ్రేణి(రేంజి) నిరోధం చెయ్యగల నిర్వాహక అనుమతిని అశక్తం చేసాం.',
'ipb_expiry_invalid' => 'అంతమయ్యే గడువు సరైనది కాదు.',
'ipb_expiry_temp' => 'దాచిన వాడుకరిపేరు నిరోధాలు శాశ్వతంగా ఉండాలి.',
'ipb_hide_invalid' => 'ఈ ఖాతాను అణచలేకపోతున్నాం. దాని కింద చాలా దిద్దుబాట్లు ఉండి ఉంటాయి.',
'ipb_already_blocked' => '"$1" ను ఇప్పటికే నిరోధించాం',
'ipb-needreblock' => '$1ని ఇప్పటికే నిరోధించారు. ఆ అమరికలని మీరు మార్చాలనుకుంటున్నారా?',
'ipb-otherblocks-header' => 'ఇతర {{PLURAL:$1|నిరోధం|నిరోధాలు}}',
'unblock-hideuser' => 'ఈ వాడుకరి యొక్క వాడుకరిపేరు దాచబడి ఉంది కాబట్టి, వారిపై నిరోధాన్ని తీసెయ్యలేరు.',
'ipb_cant_unblock' => 'లోపం: నిరోధించిన ఐడీ $1 దొరకలేదు. దానిపై ఉన్న నిరోధాన్ని ఈసరికే తొలగించి ఉండవచ్చు.',
'ipb_blocked_as_range' => 'లోపం: ఐపీ $1 ను నేరుగా నిరోధించలేదు, అంచేత నిరోధాన్ని రద్దుపరచలేము.  అయితే, అది $2 శ్రేణిలో భాగంగా నిరోధానికి గురైంది, ఈ శ్రేణిపై ఉన్న నిరోధాన్ని రద్దుపరచవచ్చు.',
'ip_range_invalid' => 'సరైన ఐపీ శ్రేణి కాదు.',
'ip_range_toolarge' => '/$1  కంటే పెద్దవైన సామూహిక నిరోధాలు అనుమతించబడవు.',
'proxyblocker' => 'ప్రాక్సీ నిరోధకం',
'proxyblockreason' => 'మీ ఐపీ అడ్రసు ఒక ఓపెన్ ప్రాక్సీ కాబట్టి దాన్ని నిరోధించాం. మీ ఇంటర్నెట్ సేవాదారుని గానీ, సాంకేతిక సహాయకుని గానీ సంప్రదించి తీవ్రమైన ఈ భద్రతా వైఫల్యాన్ని గురించి తెలపండి.',
'sorbsreason' => '{{SITENAME}} వాడే DNSBLలో మీ ఐపీ అడ్రసు ఒక ఓపెన్ ప్రాక్సీగా నమోదై ఉంది.',
'sorbs_create_account_reason' => 'మీ ఐపీ అడ్రసు DNSBL లో ఓపెను ప్రాక్సీగా నమోదయి ఉంది. మీరు ఎకౌంటును సృష్టించజాలరు.',
'cant-see-hidden-user' => 'మీరు నిరోధించదలచిన వాడుకరి ఇప్పటికే నిరోధించబడి, దాచబడి ఉన్నారు. మీకు హక్కు లేదు కాబట్టి, ఆ వాడుకరి నిరోధాన్ని చూడటంగానీ, దాన్ని మార్చడంగానీ చెయ్యలేరు.',
'ipbblocked' => 'మీరు ఇతర వాడుకరులని నిరోధించలేరు లేదా అనిరోధించలేరు, ఎందుకంటే మిమ్మల్ని మీరే నిరోధించుకున్నారు',
'ipbnounblockself' => 'మిమ్మల్ని మీరే అనిరోధించుకునే అనుమతి మీకు లేదు',

# Developer tools
'lockdb' => 'డాటాబేసును లాక్‌ చెయ్యి',
'unlockdb' => 'డాటాబేసుకి తాళంతియ్యి',
'lockdbtext' => 'డాటాబేసును లాక్‌ చెయ్యడం వలన సభ్యులు పేజీలు మార్చడం, అభిరుచులు మార్చడం, వీక్షణ జాబితాను మార్చడం వంటి డాటాబేసు ఆధారిత పనులు చెయ్యలేరు. మీరు చెయ్యదలచినది ఇదేనని, మీ పని కాగానే తిరిగి డాటాబేసును ప్రారంభిస్తాననీ ధృవీకరించండి.',
'unlockdbtext' => 'డేటాబేసుకు తాళం తీసేసిన తరువాత, వాడుకరులందరూ పేజీలను మార్చటం మొదలు పెట్టగలరు,
తమ అభిరుచులను మార్చుకోగలరు, వీక్షణా జాబితాకు పేజీలను కలుపుకోగలరు తీసివేయనూగలరు,
అంతేకాక డేటాబేసులో మార్పులు చేయగలిగే ఇంకొన్ని పనులు కూడా చేయవచ్చు.
మీరు చేయదలుచుకుంది ఇదేనాకాదా అని ఒకసారి నిర్ధారించండి.',
'lockconfirm' => 'అవును, డేటాబేసును లాకు చెయ్యాలని నిజంగానే అనుకుంటున్నాను.',
'unlockconfirm' => 'అవును, నేను నిజంగానే డాటాబేసుకి తాళం తియ్యాలనుకుంటున్నాను.',
'lockbtn' => 'డాటాబేసును లాక్‌ చెయ్యి',
'unlockbtn' => 'డాటాబేసు తాళంతియ్యి',
'locknoconfirm' => 'మీరు ధృవీకరణ పెట్టెలో టిక్కు పెట్టలేదు.',
'lockdbsuccesssub' => 'డాటాబేసు లాకు విజయవంతం అయ్యింది.',
'unlockdbsuccesssub' => 'డాటాబేసుకు తాళం తీసేసాం',
'lockdbsuccesstext' => 'డాటాబేసు లాకయింది.<br />పని పూర్తి కాగానే లాకు తియ్యడం మర్చిపోకండి.',
'unlockdbsuccesstext' => 'డాటాబేసుకి తాళం తీసాం.',
'lockfilenotwritable' => 'డేటాబేసుకు తాళంవేయగల ఫైలులో రాయలేకపోతున్నాను.  డేటాబేసుకు తాళంవేయటానికిగానీ లేదా తీసేయటానికిగానీ, వెబ్‌సర్వరులో ఉన్న ఈ ఫైలులో రాయగలగాలి.',
'databasenotlocked' => 'డేటాబేసు లాకవలేదు.',
'lockedbyandtime' => '($2 న $3 వద్ద {{GENDER:$1|$1}} ద్వారా)',

# Move page
'move-page' => '$1 తరలింపు',
'move-page-legend' => 'పేజీని తరలించు',
'movepagetext' => "కింది ఫారం ఉపయోగించి, ఓ పేజీ పేరు మార్చవచ్చు. దాంతో పాటు దాని చరిత్ర అంతా కొత్త పేజీ చరిత్రగా మారుతుంది.
పాత పేజీ కొత్త దానికి దారిమార్పు పేజీ అవుతుంది.
పాత పేజీకి ఉన్న దారిమార్పు పేజీలను ఆటోమెటిగ్గా సరిచేయవచ్చు.
ఆలా చేయవద్దనుకుంటే, [[Special:DoubleRedirects|ద్వంద]] లేదా [[Special:BrokenRedirects|పనిచేయని]] దారిమార్పుల పేజీలలో సరిచూసుకోండి.
లింకులన్నీ అనుకున్నట్లుగా చేరవలసిన చోటికే చేరుతున్నాయని నిర్ధారించుకోవలసిన బాధ్యత మీదే.

ఒకవేళ కొత్త పేరుతో ఇప్పటికే ఒక పేజీ ఉండి ఉంటే (అది గత మార్పుల చరిత్ర లేని ఖాళీ పేజీనో లేదా దారిమార్పు పేజీనో కాకపోతే) తరలింపు '''జరగదు'''.

అంటే మీరు పొరపాటు చేస్తే కొత్త పేరును మార్చి తిరిగి పాత పేరుకు తీసుకురాగలరు కానీ ఇప్పటికే వున్న పేజీని తుడిచివేయలేరు.

'''హెచ్చరిక!'''
ఈ మార్పు బాగా జనరంజకమైన పేజీలకు అనూహ్యం కావచ్చు;
దాని పరిణామాలను అర్ధం చేసుకుని ముందుకుసాగండి.",
'movepagetext-noredirectfixer' => "కింది ఫారాన్ని వాడి, ఓ పేజీ పేరు మార్చవచ్చు. దాని చరిత్ర పూర్తిగా కొత్త పేరుకు తరలిపోతుంది. 
పాత శీర్షిక కొత్తదానికి దారిమార్పు పేజీగా మారిపోతుంది.
[[Special:DoubleRedirects|double]] లేదా [[Special:BrokenRedirects|broken redirects]] లను చూడటం మరువకండి.
లింకులు వెళ్ళాల్సిన చోటికి వెళ్తున్నాయని నిర్ధారించుకోవాల్సిన బాధ్యత మీదే.
కొత్త పేరుతో ఈసరికే ఏదైనా పేజీ ఉంటే - అది ఖాళీగా ఉన్నా లేక మార్పుచేర్పుల చరిత్ర ఏమీ లేని దారిమార్పు పేజీ అయినా తప్ప- తరలింపు ’’’జరుగదు’’’ అని గమనించండి.
అంటే, ఏదైనా పొరపాటు జరిగితే పేరును తిరిగి పాత పేరుకే మార్చగలరు తప్ప, ఈపాటికే ఉన్న పేజీపై ఓవరరైటు చెయ్యలేరు.

'''హెచ్చరిక!'''
బహుళ వ్యాప్తి పొందిన ఓ పేజీలో ఈ మార్పు చాలా తీవ్రమైనది, ఊహించనిదీ అవుతుంది.
దాని పర్యవసానాలు అర్థం చేసుకున్నాకే ముందుకు వెళ్ళండి.",
'movepagetalktext' => "దానితో పాటు సంబంధిత చర్చా పేజీ కూడా ఆటోమాటిక్‌‌గా తరలించబడుతుంది, '''కింది సందర్భాలలో తప్ప:'''
*ఒక నేంస్పేసు నుండి ఇంకోదానికి తరలించేటపుడు,
*కొత్త పేరుతో ఇప్పటికే ఒక చర్చా పేజీ ఉంటే,
*కింది చెక్‌బాక్సులో టిక్కు పెట్టకపోతే.

ఆ సందర్భాలలో, మీరు చర్చా పేజీని కూడా పనిగట్టుకుని తరలించవలసి ఉంటుంది, లేదా ఏకీకృత పరచవలసి ఉంటుంది.",
'movearticle' => 'పేజీని తరలించు',
'moveuserpage-warning' => "'''హెచ్చరిక:''' మీరు ఒక వాడుకరి పేజీని తరలించబోతున్నారు. పేజీ మాత్రమే తరలించబడుతుందనీ, వాడుకరి పేరుమార్పు జరగదనీ గమనించండి.",
'movenologintext' => 'పేజీని తరలించడానికి మీరు [[Special:UserLogin|లాగిన్‌]] అయిఉండాలి.',
'movenotallowed' => 'పేజీలను తరలించడానికి మీకు అనుమతి లేదు.',
'movenotallowedfile' => 'మీకు ఫైళ్ళను తరలించే అనుమతి లేదు.',
'cant-move-user-page' => 'వాడుకరి పేజీలను (ఉపపేజీలు కానివాటిని) తరలించే అనుమతి మీకు లేదు .',
'cant-move-to-user-page' => 'మీకు ఒక పేజీని వాడుకరి పేజీగా (వాడుకరి ఉపపేజీగా తప్ప) తరలించే అనుమతి లేదు.',
'newtitle' => 'కొత్త పేరుకి',
'move-watch' => 'ఈ పేజీని గమనించు',
'movepagebtn' => 'పేజీని తరలించు',
'pagemovedsub' => 'తరలింపు విజయవంతమైనది',
'movepage-moved' => '\'\'\'"$1"ని "$2"కి తరలించాం\'\'\'',
'movepage-moved-redirect' => 'ఒక దారిమార్పుని సృష్టించాం.',
'movepage-moved-noredirect' => 'దారిమార్పుని సృష్టించలేదు.',
'articleexists' => 'ఆ పేరుతో ఇప్పటికే ఒక పేజీ ఉంది, లేదా మీరు ఎంచుకున్న పేరు సరైనది కాదు. వేరే పేరు ఎంచుకోండి.',
'cantmove-titleprotected' => 'ఈ పేరుతోఉన్న పేజీని సృష్టించనివ్వకుండా సంరక్షిస్తున్నారు, అందుకని ఈ ప్రదేశంలోకి పేజీని తరలించలేను',
'movetalk' => 'కూడా వున్న చర్చ పేజీని తరలించు',
'move-subpages' => 'ఉపపేజీలను ($1 వరకు) తరలించు',
'move-talk-subpages' => 'చర్చా పేజీ యొక్క ఉపపేజీలను ($1 వరకు) తరలించు',
'movepage-page-exists' => '$1 అనే పేజీ ఈపాటికే ఉంది మరియు దాన్ని ఆటోమెటిగ్గా ఈ పేజీతో మార్చివేయలేరు.',
'movepage-page-moved' => '$1 అనే పేజీని $2 కి తరలించాం.',
'movepage-page-unmoved' => '$1 అనే పేజీని $2 కి తరలించలేకపోయాము.',
'movepage-max-pages' => '$1 యొక్క గరిష్ఠ పరిమితి {{PLURAL:$1|పేజీ|పేజీలు}} వరకు తరలించడమైనది. ఇక ఆటోమాటిగ్గా తరలించము.',
'movelogpage' => 'తరలింపుల చిట్టా',
'movelogpagetext' => 'కింద తరలించిన పేజీల జాబితా ఉన్నది.',
'movesubpage' => '{{PLURAL:$1|ఉపపేజీ|ఉపపేజీలు}}',
'movesubpagetext' => 'ఈ పేజీకి క్రింద చూపించిన $1 {{PLURAL:$1|ఉపపేజీ ఉంది|ఉపపేజీలు ఉన్నాయి}}.',
'movenosubpage' => 'ఈ పేజీకి ఉపపేజీలు ఏమీ లేవు.',
'movereason' => 'కారణం:',
'revertmove' => 'తరలింపును రద్దుచేయి',
'delete_and_move' => 'తొలగించి, తరలించు',
'delete_and_move_text' => '==తొలగింపు అవసరం==

ఉద్దేశించిన వ్యాసం "[[:$1]]" ఇప్పటికే ఉనికిలో ఉంది. ప్రస్తుత తరలింపుకు వీలుగా దాన్ని తొలగించేయమంటారా?',
'delete_and_move_confirm' => 'అవును, పేజీని తొలగించు',
'delete_and_move_reason' => '"[[$1]]"ను తరలించడానికి వీలుగా తొలగించారు',
'selfmove' => 'మూలం, గమ్యం పేర్లు ఒకటే; పేజీని దాని పైకే తరలించడం కుదరదు.',
'immobile-source-namespace' => '"$1" పేరుబరిలోని పేజీలను తరలించలేరు',
'immobile-target-namespace' => '"$1" పేరుబరిలోనికి పేజీలను తరలించలేరు',
'immobile-target-namespace-iw' => 'పేజీని తరలించడానికి అంతర్వికీ లింకు సరైన లక్ష్యం కాదు.',
'immobile-source-page' => 'ఈ పేజీని తరలించలేరు.',
'immobile-target-page' => 'ఆ లక్ష్యిత శీర్షికకి తరలించలేము.',
'imagenocrossnamespace' => 'ఫైలును, ఫైలుకు చెందని నేమ్‌స్పేసుకు తరలించలేం',
'nonfile-cannot-move-to-file' => 'దస్త్రాలు కానివాటిని దస్త్రపు పేరుబరికి తరలించలేరు',
'imagetypemismatch' => 'ఈ కొత్త ఫైలు ఎక్స్&zwnj;టెన్షన్ ఫైలు రకానికి సరిపోలేదు',
'imageinvalidfilename' => 'లక్ష్యిత దస్త్రపు పేరు చెల్లనిది',
'fix-double-redirects' => 'పాత పేజీని సూచిస్తున్న దారిమార్పులను తాజాకరించు',
'move-leave-redirect' => 'పాత పేజీని దారిమార్పుగా ఉంచు',
'protectedpagemovewarning' => "'''హెచ్చరిక:''' ఈ పేజీని సంరక్షించారు కనుక నిర్వాహక హక్కులు కలిగిన వాడుకరులు మాత్రమే దీన్ని తరలించగలరు.
మీ సమాచారం కోసం చివరి చిట్టా పద్దుని ఇక్కడ ఇస్తున్నాం:",
'semiprotectedpagemovewarning' => "'''గమనిక:''' ఈ పేజీని సంరక్షించారు కనుక నమోదైన వాడుకరులు మాత్రమే దీన్ని తరలించగలరు.
మీ సమాచారం కోసం చివరి చిట్టా పద్దుని ఇక్కడ ఇస్తున్నాం:",
'move-over-sharedrepo' => '== ఫైలు ఉంది ==
[[:$1]] సామూహిక నిక్షేపంలో ఉంది. ఈ పేరుతో మరొక ఫైలును తరలిస్తే అది ఆ సామూహిక ఫైలును ఓవర్‌రైడు చేస్తుంది.',
'file-exists-sharedrepo' => 'ఎంచుకున్న ఫైలు పేరు ఇప్పటికే సామాన్య భాండాగారంలో వాడుకలో ఉంది.
దయచేసి మరొక పేరుని ఎంచుకోండి.',

# Export
'export' => 'ఎగుమతి పేజీలు',
'exporttext' => 'ఎంచుకున్న పేజీ లేదా పేజీలలోని వ్యాసం మరియు పేజీ చరితం లను XML లో ఎగుమతి చేసుకోవచ్చు. MediaWiki ని ఉపయోగించి Special:Import page ద్వారా దీన్ని వేరే వికీ లోకి దిగుమతి చేసుకోవచ్చు.

పేజీలను ఎగుమతి చేసందుకు, కింద ఇచ్చిన టెక్స్టు బాక్సులో పేజీ పేర్లను లైనుకో పేరు చొప్పున ఇవ్వండి. ప్రస్తుత కూర్పుతో పాటు పాత కూర్పులు కూడా కావాలా, లేక ప్రస్తుత కూర్పు మాత్రమే చాలా అనే విషయం కూడా ఇవ్వవచ్చు.

రెండో పద్ధతిలో అయితే, పేజీ యొక్క లింకును కూడా వాడవచ్చు. ఉదాహరణకు, "[[{{MediaWiki:Mainpage}}]]" కోసమైతే [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] అని ఇవ్వవచ్చు.',
'exportcuronly' => 'ప్రస్తుత కూర్పు మాత్రమే, పూర్తి చరితం వద్దు',
'exportnohistory' => "----
'''గమనిక:''' ఈ ఫారాన్ని ఉపయోగించి పేజీలయొక్క పూర్తి చరిత్రను ఎగుమతి చేయడాన్ని సర్వరుపై వత్తిడి పెరిగిన కారణంగా ప్రస్తుతం నిలిపివేశారు.",
'export-submit' => 'ఎగుమతించు',
'export-addcattext' => 'ఈ వర్గంలోని పేజీలను చేర్చు:',
'export-addcat' => 'చేర్చు',
'export-addnstext' => 'ఈ పేరుబరి నుండి పేజీలను చేర్చు:',
'export-addns' => 'చేర్చు',
'export-download' => 'ఫైలుగా భద్రపరచు',
'export-templates' => 'మూసలను కలుపు',
'export-pagelinks' => 'ఈ లోతు వరకు లింకై ఉన్న పేజీలను చేర్చు:',

# Namespace 8 related
'allmessages' => 'అన్ని సిస్టం సందేశాలు',
'allmessagesname' => 'పేరు',
'allmessagesdefault' => 'అప్రమేయ సందేశపు పాఠ్యం',
'allmessagescurrent' => 'ప్రస్తుత పాఠ్యం',
'allmessagestext' => 'మీడియావికీ పేరుబరిలో ఉన్న అంతరవర్తి సందేశాల జాబితా ఇది.
సాధారణ మీడియావికీ స్థానికీకరణకి మీరు తోడ్పడాలనుకుంటే, దయచేసి [https://www.mediawiki.org/wiki/Localisation మీడియావికీ స్థానికీకరణ] మరియు [//translatewiki.net ట్రాన్స్&zwnj;లేట్&zwnj;వికీ.నెట్] సైట్లను చూడండి.',
'allmessagesnotsupportedDB' => "'''\$wgUseDatabaseMessages''' అన్నది అచేతనం చేసి ఉన్నందువల్ల ఈ పేజీని వాడలేరు.",
'allmessages-filter-legend' => 'వడపోత',
'allmessages-filter' => 'కస్టమైజేషను స్థితిని బట్టి వడకట్టు:',
'allmessages-filter-unmodified' => 'మార్చబడనివి',
'allmessages-filter-all' => 'అన్నీ',
'allmessages-filter-modified' => 'మార్చబడినవి',
'allmessages-prefix' => 'ఉపసర్గ పై వడపోత:',
'allmessages-language' => 'భాష:',
'allmessages-filter-submit' => 'వెళ్ళు',

# Thumbnails
'thumbnail-more' => 'పెద్దది చెయ్యి',
'filemissing' => 'ఫైలు కనపడుటలేదు',
'thumbnail_error' => '$1: నఖచిత్రం తయారుచెయ్యడంలో లోపం జరిగింది',
'djvu_page_error' => 'DjVu పేజీ రేంజి దాటిపోయింది',
'djvu_no_xml' => 'DjVu ఫైలు కోసం XMLను తీసుకుని రాలేకపోయాను',
'thumbnail_invalid_params' => 'నఖచిత్రాలకు సరయిన పారామీటర్లు లేవు',
'thumbnail_dest_directory' => 'గమ్యస్థానంలో డైరెక్టరీని సృష్టించలేకపోయాం',
'thumbnail_image-type' => 'ఈ బొమ్మ రకానికి మద్దతు లేదు',
'thumbnail_gd-library' => 'అసంపూర్ణ GD సంచయపు ఏర్పాటు: $1 ఫంక్షను లేదు.',
'thumbnail_image-missing' => 'ఫైలు తప్పిపోయినట్లున్నది: $1',

# Special:Import
'import' => 'పేజీలను దిగుమతి చేసుకోండి',
'importinterwiki' => 'ఇంకోవికీ నుండి దిగుమతి',
'import-interwiki-text' => 'దిగుమతి చేసుకోవడానికి ఒక వికీని మరియు అందులోని పేజీని ఎంచుకోండి.
కూర్పుల తేదీలు మరియు మార్పులు చేసిన వారి పేర్లు భద్రపరచబడతాయి.
ఇతర వికీలనుండి చేస్తున్న దిగుమతుల చర్యలన్నీ [[Special:Log/import|దిగుమతుల చిట్టా]]లో నమోదవుతాయి.',
'import-interwiki-source' => 'మూల వికీ/పేజీ:',
'import-interwiki-history' => 'ఈ పేజీ యొక్క అన్ని చారిత్రక కూర్పులను కాపీ చెయ్యి',
'import-interwiki-templates' => 'అన్ని మూసలను ఉంచు',
'import-interwiki-submit' => 'దిగుమతించు',
'import-interwiki-namespace' => 'లక్ష్యిత నేంస్పేసు:',
'import-upload-filename' => 'పైలుపేరు:',
'import-comment' => 'వ్యాఖ్య:',
'importtext' => '[[Special:Export|ఎగుమతి ఉపకరణాన్ని]] ఉపయోగించి, ఈ ఫైలుని  మూల వికీ నుంచి ఎగుమతి చెయ్యండి.
దాన్ని మీ కంప్యూటర్లో భద్రపరచి, ఆపై ఇక్కడికి ఎక్కించండి.',
'importstart' => 'పేజీలను దిగుమతి చేస్తున్నాం...',
'import-revision-count' => '$1 {{PLURAL:$1|కూర్పు|కూర్పులు}}',
'importnopages' => 'దిగుమతి చెయ్యడానికి పేజీలేమీ లేవు.',
'imported-log-entries' => '$1 {{PLURAL:$1|చిట్టా పద్దు దిగుమతయ్యింది|చిట్టా పద్దులు దిగుమతయ్యాయి}}.',
'importfailed' => 'దిగుమతి కాలేదు: $1',
'importunknownsource' => 'దిగుమతి చేసుకుంటున్న దాని మాతృక రకం తెలియదు',
'importcantopen' => 'దిగుమతి చేయబోతున్న ఫైలును తెరవలేకపోతున్నాను',
'importbadinterwiki' => 'చెడు అంతర్వికీ లింకు',
'importnotext' => 'ఖాళీ లేదా పాఠ్యం లేదు',
'importsuccess' => 'దిగుమతి పూర్తయ్యింది!',
'importhistoryconflict' => 'కూర్పుల చరిత్రలో ఘర్షణ తలెత్తింది (ఈ పేజీని ఇంతకు ముందే దిగుమతి చేసుంటారు)',
'importnosources' => 'No transwiki import sources have been defined and direct history uploads are disabled.
ఎటువంటి అంతర్వికీ దిగుమతి మూలాలను పేర్కొనకపోవటం వలన, ప్రత్యక్ష చరిత్ర అప్లోడులను నిలిపివేశాం.',
'importnofile' => 'ఎటువంటి దిగుమతి ఫైలునూ అప్లోడుచేయలేదు.',
'importuploaderrorsize' => 'దిగుమతి ఫైలు అప్లోడు ఫలించలేదు. ఈ ఫైలు అప్లోడు ఫైలుకు నిర్దేశించిన పరిమాణం కంటే పెద్దా ఉంది.',
'importuploaderrorpartial' => 'దిగుమతి ఫైలు అప్లోడు ఫలించలేదు. ఈ ఫైలులో కొంత భాగాన్ని మాత్రమే అప్లోడు చేయగలిగం.',
'importuploaderrortemp' => 'దిగుమతి ఫైలు అప్లోడు ఫలించలేదు. ఒక తాత్కాలిక ఫోల్డరు కనిపించటం లేదు.',
'import-parse-failure' => 'దిగుమతి చేసుకుంటున్న XML విశ్లేషణ ఫలించలేదు',
'import-noarticle' => 'దిగుమతి చెయ్యాల్సిన పేజీ లేదు!',
'import-nonewrevisions' => 'అన్ని కూర్పులూ గతంలోనే దిగుమతయ్యాయి.',
'xml-error-string' => '$1 $2వ లైనులో, వరుస $3 ($4వ బైటు): $5',
'import-upload' => 'XML డేటాను అప్‌లోడు చెయ్యి',
'import-token-mismatch' => 'సెషను భోగట్టా పోయింది. దయచేసి మళ్ళీ ప్రయత్నించండి.',
'import-invalid-interwiki' => 'మీరు చెప్పిన వికీనుండి దిగుమతి చేయలేము.',

# Import log
'importlogpage' => 'దిగుమతుల చిట్టా',
'importlogpagetext' => 'ఇతర వికీల నుండీ మార్పుల చరిత్రతోసహా తెచ్చిన నిర్వహణా దిగుమతులు.',
'import-logentry-upload' => '[[$1]]ను ఫైలు అప్లోడు ద్వారా దిగుమతి చేసాం',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|కూర్పు|కూర్పులు}}',
'import-logentry-interwiki' => 'ఇతర వికీల నుండి $1',
'import-logentry-interwiki-detail' => '$2 నుండి {{PLURAL:$1|ఒక కూర్పు|$1 కూర్పులు}}',

# JavaScriptTest
'javascripttest' => 'జావాస్క్రిప్ట్ పరీక్ష',
'javascripttest-title' => '$1 పరీక్షలు నడుస్తున్నాయి',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'మీ వాడుకరి పేజీ',
'tooltip-pt-anonuserpage' => 'మీ ఐపీ చిరునామాకి సంబంధించిన వాడుకరి పేజీ',
'tooltip-pt-mytalk' => 'మీ చర్చా పేజీ',
'tooltip-pt-anontalk' => 'ఈ ఐపీ చిరునామా నుండి చేసిన మార్పుల గురించి చర్చ',
'tooltip-pt-preferences' => 'మీ అభిరుచులు',
'tooltip-pt-watchlist' => 'మీరు మార్పుల కొరకు గమనిస్తున్న పేజీల జాబితా',
'tooltip-pt-mycontris' => 'మీ మార్పు-చేర్పుల జాబితా',
'tooltip-pt-login' => 'మీరు లోనికి ప్రవేశించడాన్ని ప్రోత్సహిస్తున్నాం; కానీ అది తప్పనిసరి కాదు.',
'tooltip-pt-logout' => 'నిష్క్రమించండి',
'tooltip-ca-talk' => 'విషయపు పుట గురించి చర్చ',
'tooltip-ca-edit' => 'ఈ పేజీని మీరు సరిదిద్దవచ్చు. దాచేముందు మునుజూపు బొత్తాన్ని వాడండి.',
'tooltip-ca-addsection' => 'కొత్త విభాగాన్ని మొదలుపెట్టండి',
'tooltip-ca-viewsource' => 'ఈ పుటని సంరక్షించారు. మీరు దీని మూలాన్ని చూడవచ్చు',
'tooltip-ca-history' => 'ఈ పుట యొక్క వెనుకటి కూర్పులు',
'tooltip-ca-protect' => 'ఈ పేజీని సంరక్షించండి',
'tooltip-ca-unprotect' => 'ఈ పేజీ సంరక్షణను మార్చండి',
'tooltip-ca-delete' => 'ఈ పేజీని తొలగించండి',
'tooltip-ca-undelete' => 'ఈ పేజీని తొలగించడానికి ముందు చేసిన మార్పులను పునఃస్థాపించు',
'tooltip-ca-move' => 'ఈ పేజీని తరలించండి',
'tooltip-ca-watch' => 'ఈ పేజీని మీ విక్షణా జాబితాకి చేర్చుకోండి',
'tooltip-ca-unwatch' => 'ఈ పేజీని మీ విక్షణా జాబితా నుండి తొలగించండి',
'tooltip-search' => '{{SITENAME}} లో వెతకండి',
'tooltip-search-go' => 'ఇదే పేరుతో పేజీ ఉంటే అక్కడికి తీసుకెళ్ళు',
'tooltip-search-fulltext' => 'పేజీలలో ఈ పాఠ్యం కొరకు వెతుకు',
'tooltip-p-logo' => 'మొదటి పుటను దర్శించండి',
'tooltip-n-mainpage' => 'తలపుటను చూడండి',
'tooltip-n-mainpage-description' => 'మొదటి పుటను చూడండి',
'tooltip-n-portal' => 'ప్రాజెక్టు గురించి, మీరేం చేయవచ్చు, సమాచారం ఎక్కడ దొరుకుతుంది',
'tooltip-n-currentevents' => 'ఇప్పటి ముచ్చట్ల యొక్క మునుపటి మందలను తెలుసుకొనుడి',
'tooltip-n-recentchanges' => 'వికీలో ఇటీవల జరిగిన మార్పుల జాబితా.',
'tooltip-n-randompage' => 'ఓ యాదృచ్చిక పేజీని చూడండి',
'tooltip-n-help' => 'తెలుసుకోడానికి ఓ మంచి ప్రదేశం.',
'tooltip-t-whatlinkshere' => 'ఇక్కడితో ముడిపడియున్న అన్ని వికీ పుటల లంకెలు',
'tooltip-t-recentchangeslinked' => 'ఈ పుటకు ముడివడియున్న పుటలలో జరిగిన ఇటీవలి మార్పులు',
'tooltip-feed-rss' => 'ఈ పేజీకి RSS ఫీడు',
'tooltip-feed-atom' => 'ఈ పేజీకి Atom ఫీడు',
'tooltip-t-contributions' => 'ఈ వాడుకరి యొక్క రచనల జాబితా చూడండి',
'tooltip-t-emailuser' => 'ఈ వాడుకరికి ఓ ఈమెయిలు పంపండి',
'tooltip-t-upload' => 'దస్త్రాలను ఎక్కించండి',
'tooltip-t-specialpages' => 'అన్ని ప్రత్యేక పుటల యొక్క జాబితా',
'tooltip-t-print' => 'ఈ పుట యొక్క అచ్చుతీయదగ్గ కూర్పు',
'tooltip-t-permalink' => 'పుట యొక్క ఈ కూర్పుకి శాశ్వత లంకె',
'tooltip-ca-nstab-main' => 'ముచ్చట్ల పుటను చూడండి',
'tooltip-ca-nstab-user' => 'వాడుకరి పేజీని చూడండి',
'tooltip-ca-nstab-media' => 'మీడియా పేజీని చూడండి',
'tooltip-ca-nstab-special' => 'ఇది ఒక ప్రత్యేక పుట, దీన్ని మీరు సరిదిద్దలేరు',
'tooltip-ca-nstab-project' => 'ప్రాజెక్టు పేజీని చూడండి',
'tooltip-ca-nstab-image' => 'ఫైలు పేజీని చూడండి',
'tooltip-ca-nstab-mediawiki' => 'వ్యవస్థా సందేశం చూడండి',
'tooltip-ca-nstab-template' => 'మూసని చూడండి',
'tooltip-ca-nstab-help' => 'సహాయపు పేజీ చూడండి',
'tooltip-ca-nstab-category' => 'వర్గపు పేజీ చూడండి',
'tooltip-minoredit' => 'దీన్ని చిన్న మార్పుగా గుర్తించు',
'tooltip-save' => 'మీ మార్పులను భద్రపరచండి',
'tooltip-preview' => 'మీ మార్పులను మునుజూడండి, భద్రపరిచేముందు ఇది వాడండి!',
'tooltip-diff' => 'పాఠానికి మీరు చేసిన మార్పులను చూపుంచు. [alt-v]',
'tooltip-compareselectedversions' => 'ఈ పేజీలో ఎంచుకున్న రెండు కూర్పులకు మధ్య తేడాలను చూడండి. [alt-v]',
'tooltip-watch' => 'ఈ పేజీని మీ విక్షణా జాబితాకు చేర్చండి',
'tooltip-watchlistedit-normal-submit' => 'శీర్షికలను తీసివెయ్యి',
'tooltip-watchlistedit-raw-submit' => 'వీక్షణ జాబితాను తాజాకరించు',
'tooltip-recreate' => 'పేజీ తుడిచివేయబడ్డాకానీ మళ్ళీ సృష్టించు',
'tooltip-upload' => 'ఎగుమతి మొదలుపెట్టు',
'tooltip-rollback' => '"రద్దుచేయి" అనేది ఈ పేజీని చివరిగా మార్చినవారి మార్పులని రద్దుచేస్తుంది',
'tooltip-undo' => '"దిద్దుబాటుని రద్దుచేయి" ఈ మార్పుని రద్దుచేస్తుంది మరియు దిద్దుబాటు ఫారాన్ని మునుజూపులో తెరుస్తుంది.
సారాంశానికి కారణాన్ని చేర్చే వీలుకల్పిస్తుంది',
'tooltip-preferences-save' => 'అభిరుచులను భద్రపరచు',
'tooltip-summary' => 'చిన్న సారాంశాన్ని ఇవ్వండి',

# Metadata
'notacceptable' => 'ఈ వికీ సర్వరు మీ క్లయంటు చదవగలిగే రీతిలో డేటాను ఇవ్వలేదు.',

# Attribution
'anonymous' => '{{SITENAME}} యొక్క అజ్ఞాత {{PLURAL:$1|వాడుకరి|వాడుకరులు}}',
'siteuser' => '{{SITENAME}} వాడుకరి $1',
'anonuser' => '{{SITENAME}} అజ్ఞాత వాడుకరి $1',
'lastmodifiedatby' => 'ఈ పేజీకి $3 $2, $1న చివరి మార్పు చేసారు.',
'othercontribs' => '$1 యొక్క కృతిపై ఆధారితం.',
'others' => 'ఇతరాలు',
'siteusers' => '{{SITENAME}} {{PLURAL:$2|వాడుకరి|వాడుకరులు}} $1',
'anonusers' => '{{SITENAME}} అజ్ఞాత {{PLURAL:$2|వాడుకరి|వాడుకరులు}} $1',
'creditspage' => 'పేజీ క్రెడిట్లు',
'nocredits' => 'ఈ పేజీకి క్రెడిట్ల సమాచారం అందుబాటులో లేదు.',

# Spam protection
'spamprotectiontitle' => 'స్పాం సంరక్షణ ఫిల్టరు',
'spamprotectiontext' => 'మీరు భద్రపరచదలచిన పేజీని మా స్పాం వడపోత నిరోధించింది.
బహుశా ఏదైనా నిషేధిత బయటి సైటుకు ఇచ్చిన లింకు కారణంగా ఇది జరిగివుండవచ్చు.',
'spamprotectionmatch' => 'మా స్పాం ఫిల్టరును ప్రేరేపించిన రచన భాగం ఇది: $1',
'spambot_username' => 'మీడియావికీ స్పాము శుద్ధి',
'spam_reverting' => '$1 కు లింకులు లేని గత కూర్పుకు తిరిగి తీసుకెళ్తున్నాం',
'spam_blanking' => '$1 కు లింకులు ఉన్న కూర్పులన్నిటినీ ఖాళీ చేస్తున్నాం',

# Info page
'pageinfo-title' => '"$1" గురించి సమాచారం',
'pageinfo-header-basic' => 'ప్రాథమిక సమాచారం',
'pageinfo-header-edits' => 'మార్పుల చరిత్ర',
'pageinfo-views' => 'వీక్షణల సంఖ్య',
'pageinfo-watchers' => 'పేజీ వీక్షకుల సంఖ్య',
'pageinfo-edits' => 'మొత్తం మార్పుల సంఖ్య',
'pageinfo-toolboxlink' => 'పేజీ సమాచారం',
'pageinfo-contentpage-yes' => 'అవును',
'pageinfo-protect-cascading-yes' => 'అవును',
'pageinfo-category-info' => 'వర్గపు సమాచారం',
'pageinfo-category-pages' => 'పేజీల సంఖ్య',
'pageinfo-category-subcats' => 'ఉపవర్గాల సంఖ్య',
'pageinfo-category-files' => 'దస్త్రాల సంఖ్య',

# Skin names
'skinname-cologneblue' => 'కలోన్ నీలం',
'skinname-monobook' => 'మోనోబుక్',
'skinname-modern' => 'ఆధునిక',
'skinname-vector' => 'వెక్టర్',

# Patrolling
'markaspatrolleddiff' => 'పరీక్షించినట్లుగా గుర్తు పెట్టు',
'markaspatrolledtext' => 'ఈ వ్యాసాన్ని పరీక్షించినట్లుగా గుర్తు పెట్టు',
'markedaspatrolled' => 'పరీక్షింపబడినట్లు గుర్తింపబడింది',
'markedaspatrolledtext' => '[[:$1]] యొక్క ఎంచుకున్న కూర్పుని పరీక్షించినట్లుగా గుర్తించాం.',
'rcpatroldisabled' => 'ఇటీవలి మార్పుల నిఘాను అశక్తం చేసాం',
'rcpatroldisabledtext' => 'ఇటీవలి మార్పుల నిఘాను ప్రస్తుతానికి అశక్తం చేసాం',
'markedaspatrollederror' => 'నిఘాలో ఉన్నట్లుగా గుర్తించలేకున్నాం',
'markedaspatrollederrortext' => 'నిఘాలో ఉన్నట్లు గుర్తించేందుకుగాను, కూర్పును చూపించాలి.',
'markedaspatrollederror-noautopatrol' => 'మీరు చేసిన మార్పులను మీరే నిఘాలో పెట్టలేరు.',

# Patrol log
'patrol-log-page' => 'నిఘా చిట్టా',
'patrol-log-header' => 'ఇది పర్యవేక్షించిన కూర్పుల చిట్టా.',
'log-show-hide-patrol' => '$1 పర్యవేక్షణ చిట్టా',

# Image deletion
'deletedrevision' => 'పాత సంచిక $1 తొలగించబడినది.',
'filedeleteerror-short' => 'ఫైలు తొలగించడంలో పొరపాటు: $1',
'filedeleteerror-long' => 'ఫైలుని తొలగించడంలో పొరపాట్లు జరిగాయి:

$1',
'filedelete-missing' => '"$1" అన్న ఫైలు ఉనికిలో లేనందున, దాన్ని తొలగించలేం.',
'filedelete-old-unregistered' => 'మీరు చెప్పిన ఫైలు కూర్పు "$1" డాటాబేసులో లేదు.',
'filedelete-current-unregistered' => 'మీరు చెప్పిన ఫైలు "$1" డాటాబేసులో లేదు.',
'filedelete-archive-read-only' => '"$1" భాండార డైరెక్టరీలో వెబ్‌సర్వరు రాయలేకున్నది.',

# Browsing diffs
'previousdiff' => '← మునుపటి మార్పు',
'nextdiff' => 'తరువాతి మార్పు →',

# Media information
'mediawarning' => "'''హెచ్చరిక''': ఈ రకపు ఫైలులో హానికరమైన కోడ్‌ ఉండవచ్చు.
దాన్ని నడపడం వల్ల, మీ సిస్టమ్ లొంగిపోవచ్చు.",
'imagemaxsize' => "బొమ్మ పరిమాణంపై పరిమితి:<br />''(దస్త్రపు వివరణ పుటల కొరకు)''",
'thumbsize' => 'నఖచిత్రం వైశాల్యం:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|పేజీ|పేజీలు}}',
'file-info' => 'ఫైలు పరిమాణం: $1, MIME రకం: $2',
'file-info-size' => '$1 × $2 పిక్సెళ్ళు, ఫైలు పరిమాణం: $3, MIME రకం: $4',
'file-info-size-pages' => '$1 × $2 పిక్సెళ్ళు, దస్త్రపు పరిమాణం: $3, MIME రకం: $4, $5 {{PLURAL:$5|పేజీ|పేజీలు}}',
'file-nohires' => 'మరింత స్పష్టమైన బొమ్మ లేదు.',
'svg-long-desc' => 'SVG ఫైలు, నామమాత్రంగా $1 × $2 పిక్సెళ్ళు, ఫైలు పరిమాణం: $3',
'show-big-image' => 'అసలు దస్త్రం',
'show-big-image-preview' => 'ఈ మునుజూపు పరిమాణం: $1.',
'show-big-image-other' => 'ఇతర {{PLURAL:$2|వైశాల్యం|వైశాల్యాలు}}: $1.',
'show-big-image-size' => '$1 × $2 పిక్సెళ్ళు',
'file-info-gif-looped' => 'లూపులో పడింది',
'file-info-gif-frames' => '$1 {{PLURAL:$1|ఫ్రేము|ఫ్రేములు}}',
'file-info-png-looped' => 'పునరావృతమవుతుంది',
'file-info-png-repeat' => '{{PLURAL:$1|ఒకసారి|$1 సార్లు}} ఆడించారు',
'file-info-png-frames' => '$1 {{PLURAL:$1|ఫ్రేము|ఫ్రేములు}}',

# Special:NewFiles
'newimages' => 'కొత్త ఫైళ్ళ కొలువు',
'imagelisttext' => "ఇది $2 వారీగా పేర్చిన  '''$1''' {{PLURAL:$1|పైలు|ఫైళ్ళ}} జాబితా.",
'newimages-summary' => 'ఇటీవలే ఎగుమతైన ఫైళ్ళను ఈ ప్రత్యేక పేజీ చూపిస్తుంది.',
'newimages-legend' => 'పడపోత',
'newimages-label' => 'ఫైలుపేరు (లేదా దానిలోని భాగం):',
'showhidebots' => '($1 బాట్లు)',
'noimages' => 'చూసేందుకు ఏమీ లేదు.',
'ilsubmit' => 'వెతుకు',
'bydate' => 'తేదీ వారీగ',
'sp-newimages-showfrom' => '$2, $1 నుండి మొదలుపెట్టి కొత్త ఫైళ్ళను చూపించు',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds-abbrev' => '$1క్ష',
'days-abbrev' => '$1రో',
'seconds' => '{{PLURAL:$1|$1 క్షణం|$1 క్షణాల}}',
'minutes' => '{{PLURAL:$1|ఒక నిమిషం|$1 నిమిషాల}}',
'hours' => '{{PLURAL:$1|ఒక గంట|$1 గంటల}}',
'days' => '{{PLURAL:$1|ఒక రోజు|$1 రోజుల}}',
'weeks' => '{{PLURAL:$1|$1 వారం|$1 వారాలు}}',
'months' => '{{PLURAL:$1|ఒక నెల|$1 నెలల}}',
'years' => '{{PLURAL:$1|ఒక సంవత్సరం|$1 సంవత్సరాల}}',
'ago' => '$1 క్రితం',
'just-now' => 'ఇప్పుడే',

# Human-readable timestamps
'hours-ago' => '$1 {{PLURAL:$1|గంట|గంటల}} క్రితం',
'minutes-ago' => '$1 {{PLURAL:$1|నిమిషం|నిమిషాల}} క్రితం',
'seconds-ago' => '$1 {{PLURAL:$1|క్షణం|క్షణాల}} క్రితం',
'monday-at' => 'సోమవారం నాడు $1కి',
'tuesday-at' => 'మంగళవారం నాడు $1కి',
'wednesday-at' => 'బుధవారం నాడు $1కి',
'thursday-at' => 'గురువారం నాడు $1కి',
'friday-at' => 'శుక్రవారం నాడు $1కి',
'saturday-at' => 'శనివారం నాడు $1కి',
'sunday-at' => 'ఆదివారం నాడు $1కి',
'yesterday-at' => 'నిన్న $1కి',

# Bad image list
'bad_image_list' => 'కింద తెలిపిన తీరులో కలపాలి:

జాబితాలో ఉన్నవాటినే (* గుర్తుతో మొదలయ్యే వాక్యాలు) పరిగణలోకి తీసుకుంటారు. వ్యాక్యంలో ఉన్న మొదటి లింకు ఒక చెడిపోయిన బొమ్మకు లింకు అయ్యుండాలి.
అదే వాక్యంలో ఈ లింకు తరువాత వచ్చే లింకులను పట్టించుకోదు, ఆ పేజీలలో బొమ్మలు సరిగ్గా చేర్చారని భావిస్తుంది.',

# Metadata
'metadata' => 'మెటాడేటా',
'metadata-help' => 'ఈ ఫైలులో అదనపు సమాచారం ఉంది, బహుశా దీన్ని సృష్టించడానికి లేదా సాంఖ్యీకరించడానికి వాడిన డిజిటల్ కేమెరా లేదా స్కానర్ ఆ సమాచారాన్ని చేర్చివుంవచ్చు. ఈ ఫైలుని అసలు స్థితి నుండి మారిస్తే, కొన్ని వివరాలు ఆ మారిన ఫైలులో పూర్తిగా ప్రతిఫలించకపోవచ్చు.',
'metadata-expand' => 'విస్తరిత వివరాలను చూపించు',
'metadata-collapse' => 'విస్తరిత వివరాలను దాచు',
'metadata-fields' => 'కింది జాబితాలో ఉన్న మెటాడేటా ఫీల్డులు, బొమ్మ పేజీలో మేటాడేటా టేబులు మూసుకొన్నపుడు కనబడతాయి. మిగతావి దాచేసి ఉంటాయి. 
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',

# Exif tags
'exif-imagewidth' => 'వెడల్పు',
'exif-imagelength' => 'ఎత్తు',
'exif-bitspersample' => 'ఒక్కో కాంపొనెంటుకు బిట్లు',
'exif-compression' => 'కుదింపు పద్ధతి (కంప్రెషను స్కీము)',
'exif-photometricinterpretation' => 'పిక్సెళ్ళ అమరిక',
'exif-orientation' => 'దిశ',
'exif-samplesperpixel' => 'కాంపొనెంట్ల సంఖ్య',
'exif-planarconfiguration' => 'డాటా అమరిక',
'exif-ycbcrsubsampling' => 'Y, C ల ఉప నమూనా నిష్పత్తి',
'exif-ycbcrpositioning' => 'Y మరియు C స్థానాలు',
'exif-xresolution' => 'క్షితిజసమాంతర స్పష్టత',
'exif-yresolution' => 'లంబ స్పష్టత',
'exif-stripoffsets' => 'బొమ్మ డేటా ఉన్న స్థలం',
'exif-rowsperstrip' => 'ఒక్కో పట్టికి ఉన్న అడ్డువరుసలు',
'exif-stripbytecounts' => 'ఒక్కో కుదించిన పట్టీలో ఉన్న బైట్లు',
'exif-jpeginterchangeformat' => 'JPEG SOI కి ఆఫ్‌సెట్',
'exif-jpeginterchangeformatlength' => 'JPEG డాటా యొక్క బైట్లు',
'exif-whitepoint' => 'శ్వేతబిందు వర్ణోగ్రత (క్రొమాటిసిటీ)',
'exif-primarychromaticities' => 'ప్రైమారిటీల వర్ణోగ్రతలు',
'exif-ycbcrcoefficients' => 'వర్ణస్థల మార్పు మాత్రిక స్థానసూచికలు',
'exif-referenceblackwhite' => 'నలుపు మరియు తెలుపు సూచీ విలువల యొక్క జత',
'exif-datetime' => 'ఫైలు మార్చిన తేదీ మరియు సమయం',
'exif-imagedescription' => 'బొమ్మ శీర్షిక',
'exif-make' => 'కేమెరా తయారీదారు',
'exif-model' => 'కేమెరా మోడల్',
'exif-software' => 'ఉపయోగించిన సాఫ్ట్&zwnj;వేర్',
'exif-artist' => 'కృతికర్త',
'exif-copyright' => 'కాపీ హక్కుదారు',
'exif-exifversion' => 'ఎక్సిఫ్ వెర్షన్',
'exif-flashpixversion' => 'అనుమతించే Flashpix కూర్పు',
'exif-colorspace' => 'వర్ణస్థలం',
'exif-componentsconfiguration' => 'ప్రతీ అంగం యొక్క అర్థం',
'exif-compressedbitsperpixel' => 'బొమ్మ కుదింపు పద్ధతి',
'exif-pixelydimension' => 'బొమ్మ వెడల్పు',
'exif-pixelxdimension' => 'బొమ్మ ఎత్తు',
'exif-usercomment' => 'వాడుకరి వ్యాఖ్యలు',
'exif-relatedsoundfile' => 'సంబంధిత శబ్ద ఫైలు',
'exif-datetimeoriginal' => 'డేటా తయారైన తేదీ, సమయం',
'exif-datetimedigitized' => 'డిజిటైజు చేసిన తేదీ, సమయం',
'exif-subsectime' => 'తేదీసమయం ఉపక్షణాలు',
'exif-subsectimeoriginal' => 'DateTimeOriginal ఉపసెకండ్లు',
'exif-subsectimedigitized' => 'DateTimeDigitized ఉపసెకండ్లు',
'exif-exposuretime' => 'ఎక్స్పోజరు సమయం',
'exif-exposuretime-format' => '$1 క్షణ ($2)',
'exif-fnumber' => 'F సంఖ్య',
'exif-exposureprogram' => 'ఎక్స్పోజరు ప్రోగ్రాము',
'exif-spectralsensitivity' => 'వర్ణపట సున్నితత్వం',
'exif-isospeedratings' => 'ISO స్పీడు రేటింగు',
'exif-shutterspeedvalue' => 'APEX షట్టరు వేగం',
'exif-aperturevalue' => 'APEX ఎపర్చరు',
'exif-brightnessvalue' => 'APEX దీప్తి',
'exif-exposurebiasvalue' => 'ఎక్స్పోజరు బయాస్',
'exif-maxaperturevalue' => 'గరిష్ఠ లాండు ఎపర్చరు',
'exif-subjectdistance' => 'వస్తువు దూరం',
'exif-meteringmode' => 'మీటరింగు మోడ్',
'exif-lightsource' => 'కాంతి మూలం',
'exif-flash' => 'ఫ్లాష్',
'exif-focallength' => 'కటకపు నాభ్యంతరం',
'exif-subjectarea' => 'వస్తువు ప్రదేశం',
'exif-flashenergy' => 'ఫ్లాష్ శక్తి',
'exif-focalplanexresolution' => 'X నాభి తలపు స్పష్టత',
'exif-focalplaneyresolution' => 'Y నాభి తలపు స్పష్టత',
'exif-focalplaneresolutionunit' => 'నాభితలపు స్పష్టత కొలమానం',
'exif-subjectlocation' => 'వస్తువు యొక్క ప్రాంతం',
'exif-exposureindex' => 'ఎక్స్పోజరు సూచిక',
'exif-sensingmethod' => 'గ్రహించే పద్ధతి',
'exif-filesource' => 'ఫైలు మూలం',
'exif-scenetype' => 'దృశ్యపు రకం',
'exif-customrendered' => 'కస్టమ్ బొమ్మ ప్రాసెసింగు',
'exif-exposuremode' => 'ఎక్స్పోజరు పద్ధతి',
'exif-whitebalance' => 'తెలుపు సంతులనం',
'exif-digitalzoomratio' => 'డిజిటల్ జూమ్ నిష్పత్తి',
'exif-focallengthin35mmfilm' => '35 మి.మీ. ఫిల్ములో నాభ్యంతరం',
'exif-scenecapturetype' => 'దృశ్య సంగ్రహ పద్ధతి',
'exif-gaincontrol' => 'దృశ్య నియంత్రణ',
'exif-contrast' => 'కాంట్రాస్టు',
'exif-saturation' => 'సంతృప్తి',
'exif-sharpness' => 'పదును',
'exif-devicesettingdescription' => 'డివైసు సెట్టుంగుల వివరణ',
'exif-subjectdistancerange' => 'వస్తు దూరపు శ్రేణి',
'exif-imageuniqueid' => 'విలక్షణమైన బొమ్మ ఐడీ',
'exif-gpsversionid' => 'GPS ట్యాగు కూర్పు',
'exif-gpslatituderef' => 'ఉత్తర లేదా దక్షిణ అక్షాంశం',
'exif-gpslatitude' => 'అక్షాంశం',
'exif-gpslongituderef' => 'తూర్పు లేదా పశ్చిమ రేఖాంశం',
'exif-gpslongitude' => 'రేఖాంశం',
'exif-gpsaltituderef' => 'ఎత్తుకు మూలం',
'exif-gpsaltitude' => 'సముద్ర మట్టం',
'exif-gpstimestamp' => 'GPS సమయం (అణు గడియారం)',
'exif-gpssatellites' => 'కొలిచేందుకు వాడిన ఉపగ్రహాలు',
'exif-gpsstatus' => 'రిసీవర్ స్థితి',
'exif-gpsmeasuremode' => 'కొలత పద్ధతి',
'exif-gpsdop' => 'కొలత ఖచ్చితత్వం',
'exif-gpsspeedref' => 'వేగపు కొలమానం',
'exif-gpsspeed' => 'GPS రిసీవరు వేగం',
'exif-gpstrackref' => 'కదలిక దిశ కోసం మూలం',
'exif-gpstrack' => 'కదలిక యొక్క దిశ',
'exif-gpsimgdirectionref' => 'బొమ్మ దిశ కోసం మూలం',
'exif-gpsimgdirection' => 'బొమ్మ యొక్క దిశ',
'exif-gpsmapdatum' => 'వాడిన జియోడెటిక్ సర్వే డేటా',
'exif-gpsdestlatituderef' => 'గమ్యస్థాన రేఖాంశం కోసం మూలం',
'exif-gpsdestlatitude' => 'గమ్యస్థానం యొక్క అక్షాంశం',
'exif-gpsdestlongituderef' => 'గమ్యస్థాన అక్షాంశం కోసం మూలం',
'exif-gpsdestlongitude' => 'గమ్యస్థానం యొక్క రేఖాంశం',
'exif-gpsdestbearingref' => 'గమ్యస్థాన బేరింగు కోసం మూలం',
'exif-gpsdestbearing' => 'గమ్యస్థానం బేరింగు',
'exif-gpsdestdistanceref' => 'గమ్యస్థానానీ ఉన్న దూరం కోసం మూలం',
'exif-gpsdestdistance' => 'గమ్యస్థానానికి దూరం',
'exif-gpsprocessingmethod' => 'GPS ప్రాసెసింగు పద్ధతి పేరు',
'exif-gpsareainformation' => 'GPS ప్రదేశం యొక్క పేరు',
'exif-gpsdatestamp' => 'GPS తేదీ',
'exif-gpsdifferential' => 'GPS తేడా సవరణ',
'exif-jpegfilecomment' => 'JPEG బొమ్మ వ్యాఖ్య',
'exif-keywords' => 'కీలకపదాలు',
'exif-worldregioncreated' => 'ఫొటో తీసిన ప్రపంచపు ప్రాంతం',
'exif-countrycreated' => 'ఫొటో తీసిన దేశం',
'exif-countrycodecreated' => 'ఫొటో తీసిన దేశపు కోడ్',
'exif-provinceorstatecreated' => 'ఫొటో తీసిన రాష్ట్రం లేదా ప్రాంతీయ విభాగం',
'exif-citycreated' => 'ఫొటో తీసిన నగరం',
'exif-sublocationcreated' => 'ఫొటో తీసిన నగరపు విభాగం',
'exif-worldregiondest' => 'ప్రపంచపు ప్రాంతం చూపబడింది',
'exif-countrydest' => 'దేశం చూపబడింది',
'exif-countrycodedest' => 'దేశపు కోడ్ చూపబడింది',
'exif-provinceorstatedest' => 'రాష్ట్రం లేదా ప్రాంతీయ విభాగం చూపబడింది',
'exif-citydest' => 'నగరం చూపబడింది',
'exif-sublocationdest' => 'నగరపు విభాగం చూపబడింది',
'exif-objectname' => 'పొట్టి శీర్షిక',
'exif-specialinstructions' => 'ప్రత్యేక సూచనలు',
'exif-headline' => 'శీర్షిక',
'exif-credit' => 'క్రెడిట్/సమర్పించినవారు',
'exif-source' => 'మూలం',
'exif-editstatus' => 'బొమ్మ యొక్క ఎడిటోరియల్ స్థితి',
'exif-urgency' => 'ఎంత త్వరగా కావాలి',
'exif-locationdest' => 'చూపించిన ప్రాంతం',
'exif-objectcycle' => 'ఈ మాధ్యమం ఉద్దేశించిన సమయం',
'exif-contact' => 'సంప్రదింపు సమాచారం',
'exif-writer' => '',
'exif-languagecode' => 'భాష',
'exif-iimversion' => 'IIM రూపాంతరం',
'exif-iimcategory' => 'వర్గం',
'exif-iimsupplementalcategory' => 'అనుషంగిక వర్గాలు',
'exif-datetimeexpires' => 'దీని తరువాత వాడవద్దు',
'exif-datetimereleased' => 'విడుదల తేదీ',
'exif-identifier' => 'గుర్తింపకం',
'exif-lens' => 'వాడిన కటకం',
'exif-serialnumber' => 'కెమేరా యొక్క సీరియల్ నంబర్',
'exif-cameraownername' => 'కేమెరా యజమాని',
'exif-rating' => 'రేటింగు (5 కి గాను)',
'exif-rightscertificate' => 'హక్కుల నిర్వాహణ ధృవీకరణ పత్రం',
'exif-copyrighted' => 'కాపీహక్కుల స్థితి',
'exif-copyrightowner' => 'కాపీ హక్కుదారు',
'exif-usageterms' => 'వాడుక నియమాలు',
'exif-morepermissionsurl' => 'ప్రత్యామ్నాయ లైసెన్సు సమాచారం',
'exif-pngfilecomment' => 'PNG ఫైలు వ్యాఖ్య',
'exif-disclaimer' => 'నిష్పూచీ',
'exif-contentwarning' => 'విషయపు హెచ్చరిక',
'exif-giffilecomment' => 'GIF ఫైలు వ్యాఖ్య',
'exif-intellectualgenre' => 'అంశము యొక్క రకము',
'exif-subjectnewscode' => 'సబ్జెక్టు కోడ్',
'exif-event' => 'చూపించిన ఘటన',
'exif-organisationinimage' => 'చూపించిన సంస్థ',
'exif-personinimage' => 'చిత్రంలో ఉన్న వ్యక్తి',
'exif-originalimageheight' => 'కత్తిరించబడక ముందు బొమ్మ యొక్క ఎత్తు',
'exif-originalimagewidth' => 'కత్తిరించబడక ముందు బొమ్మ యొక్క వెడల్పు',

# Exif attributes
'exif-compression-1' => 'కుదించని',

'exif-copyrighted-true' => 'నకలుహక్కులుకలది',
'exif-copyrighted-false' => 'కాపీహక్కుల స్థితి అమర్చలేదు',

'exif-unknowndate' => 'అజ్ఞాత తేదీ',

'exif-orientation-1' => 'సాధారణ',
'exif-orientation-2' => 'క్షితిజ సమాంతరంగా తిరగేసాం',
'exif-orientation-3' => '180° తిప్పాం',
'exif-orientation-4' => 'నిలువుగా తిరగేసాం',
'exif-orientation-5' => 'అపసవ్య దిశలో 90° తిప్పి, నిలువుగా తిరగేసాం',
'exif-orientation-6' => 'అపసవ్యదిశలో 90° తిప్పారు',
'exif-orientation-7' => 'సవ్యదిశలో 90° తిప్పి, నిలువుగా తిరగేసాం',
'exif-orientation-8' => 'సవ్యదిశలో 90° తిప్పారు',

'exif-planarconfiguration-1' => 'స్థూల ఆకృతి',
'exif-planarconfiguration-2' => 'సమతల ఆకృతి',

'exif-componentsconfiguration-0' => 'లేదు',

'exif-exposureprogram-0' => 'అనిర్వచితం',
'exif-exposureprogram-1' => 'చేతితో',
'exif-exposureprogram-2' => 'మామూలు ప్రోగ్రాము',
'exif-exposureprogram-3' => 'ఎపర్చరు ప్రాముఖ్యత',
'exif-exposureprogram-4' => 'షట్టరు ప్రాముఖ్యత',
'exif-exposureprogram-5' => 'సృజనాత్మక ప్రోగ్రాము (క్షేత్రపు లోతువైపు మొగ్గుతో)',
'exif-exposureprogram-6' => 'చర్య ప్రోగ్రాము (షట్టర్ వేగం వైపు మొగ్గుతో)',
'exif-exposureprogram-7' => 'పోర్ట్రైటు పద్ధతి (నేపథ్యం దృశ్యంలోకి రాకుండా క్లోజప్ ఫోటోలు)',
'exif-exposureprogram-8' => 'విస్తృత పద్ధతి (నేపథ్యం దృశ్యంలోకి వస్తూ ఉండే విస్తృత ఫోటోలు)',

'exif-subjectdistance-value' => '$1 మీటర్లు',

'exif-meteringmode-0' => 'అజ్ఞాతం',
'exif-meteringmode-1' => 'సగటు',
'exif-meteringmode-2' => 'CenterWeightedAverage',
'exif-meteringmode-3' => 'స్థలం',
'exif-meteringmode-4' => 'బహుళస్థలం',
'exif-meteringmode-5' => 'సరళి',
'exif-meteringmode-6' => 'పాక్షికం',
'exif-meteringmode-255' => 'ఇతర',

'exif-lightsource-0' => 'తెలియదు',
'exif-lightsource-1' => 'సూర్యకాంతి',
'exif-lightsource-2' => 'ఫ్లోరోసెంట్',
'exif-lightsource-3' => 'టంగ్‌స్టన్ (మామూలు బల్బు)',
'exif-lightsource-4' => 'ఫ్లాష్',
'exif-lightsource-9' => 'ఆహ్లాద వాతావరణం',
'exif-lightsource-10' => 'మేఘావృతం',
'exif-lightsource-11' => 'నీడ',
'exif-lightsource-12' => 'పగటి వెలుగు ఫ్లోరోసెంట్ (D 5700 – 7100K)',
'exif-lightsource-13' => 'పగటి తెలుపు ఫ్లోరోసెంట్ (N 4600 – 5400K)',
'exif-lightsource-14' => 'చల్లని తెలుపు ఫ్లోరోసెంట్ (W 3900 – 4500K)',
'exif-lightsource-15' => 'తెల్లని ఫ్లోరోసెంట్ (WW 3200 – 3700K)',
'exif-lightsource-17' => 'ప్రామాణిక కాంతి A',
'exif-lightsource-18' => 'ప్రామాణిక కాంతి B',
'exif-lightsource-19' => 'ప్రామాణిక కాంతి C',
'exif-lightsource-24' => 'ISO స్టూడియోలోని బల్బు వెలుతురు',
'exif-lightsource-255' => 'ఇతర కాంతి మూలం',

# Flash modes
'exif-flash-fired-0' => 'ఫ్లాష్ వెలగలేదు',
'exif-flash-fired-1' => 'ఫ్లాష్ వెలిగింది',
'exif-flash-return-0' => 'స్ట్రోబ్ రిటర్న్ డిటెక్షన్ ఫంక్షను లేదు',
'exif-flash-return-2' => 'స్ట్రోబ్ రిటర్న్ లైటును కనుగొనలేదు',
'exif-flash-return-3' => 'స్ట్రోబ్ రిటర్న్ లైటు కనబడింది',
'exif-flash-mode-1' => 'తప్పనిసరిగా ఫ్లాష్ వెలుగుతుంది',
'exif-flash-mode-2' => 'తప్పనిసరిగా ఫ్లాష్ వెలగదు',
'exif-flash-mode-3' => 'ఆటో మోడ్',
'exif-flash-function-1' => 'ఫ్లాష్ ఫంక్షను లేదు',
'exif-flash-redeye-1' => 'ఎర్ర-కన్ను తగ్గింపు పద్ధతి',

'exif-focalplaneresolutionunit-2' => 'అంగుళాలు',

'exif-sensingmethod-1' => 'అనిర్వచితం',
'exif-sensingmethod-2' => 'ఒక-చిప్పున్న రంగును గుర్తించే సెన్సారు',
'exif-sensingmethod-3' => 'రెండు-చిప్పులున్న రంగును గుర్తించే సెన్సారు',
'exif-sensingmethod-4' => 'మూడు-చిప్పులున్న రంగును గుర్తించే సెన్సారు',
'exif-sensingmethod-5' => 'వర్ణ అనుక్రమ సీమ సెన్సర్',
'exif-sensingmethod-7' => 'త్రిసరళరేఖా సెన్సర్',
'exif-sensingmethod-8' => 'వర్ణ అనుక్రమ రేఖా సెన్సర్',

'exif-filesource-3' => 'సాంఖ్యీక సాధారణ కెమెరా',

'exif-scenetype-1' => 'ఎటువంటి హంగులూ లేకుండా ఫొటోతీయబడిన బొమ్మ',

'exif-customrendered-0' => 'సాధారణ ప్రక్రియ',
'exif-customrendered-1' => 'ప్రత్యేక ప్రక్రియ',

'exif-exposuremode-0' => 'ఆటోమాటిక్ ఎక్స్పోజరు',
'exif-exposuremode-1' => 'అమర్చిన ఎక్స్పోజరు',
'exif-exposuremode-2' => 'వెలుతురుబట్టి అంచలవారీగా మారింది',

'exif-whitebalance-0' => 'ఆటోమాటిక్ తెలుపు సంతులనం',
'exif-whitebalance-1' => 'అమర్చిన తెలుపు సంతులనం',

'exif-scenecapturetype-0' => 'ప్రామాణిక',
'exif-scenecapturetype-1' => 'ప్రకృతిదృశ్యం',
'exif-scenecapturetype-2' => 'వ్యక్తి చిత్రణ',
'exif-scenecapturetype-3' => 'రాత్రి దృశ్యం',

'exif-gaincontrol-0' => 'ఏదీ కాదు',
'exif-gaincontrol-1' => 'చిన్న గెయిన్ పెంపు',
'exif-gaincontrol-2' => 'పెద్ద గెయిన్ పెంపు',
'exif-gaincontrol-3' => 'చిన్న గెయిన్ తగ్గింపు',
'exif-gaincontrol-4' => 'పెద్ద గెయిన్ తగ్గింపు',

'exif-contrast-0' => 'సాధారణ',
'exif-contrast-1' => 'మృదువు',
'exif-contrast-2' => 'కఠినం',

'exif-saturation-0' => 'సాధారణ',
'exif-saturation-1' => 'రంగులు ముద్దలు ముద్దలుగా తయారవ్వలేదు',
'exif-saturation-2' => 'రంగులు ముద్దలు ముద్దలుగా తయారయ్యాయి',

'exif-sharpness-0' => 'సాధారణ',
'exif-sharpness-1' => 'మృదువు',
'exif-sharpness-2' => 'కఠినం',

'exif-subjectdistancerange-0' => 'అజ్ఞాతం',
'exif-subjectdistancerange-1' => 'మాక్రో',
'exif-subjectdistancerange-2' => 'దగ్గరి దృశ్యం',
'exif-subjectdistancerange-3' => 'దూరపు దృశ్యం',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'ఉత్తర అక్షాంశం',
'exif-gpslatitude-s' => 'దక్షిణ అక్షాంశం',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'తూర్పు రేఖాంశం',
'exif-gpslongitude-w' => 'పశ్చిమ రేఖాంశం',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => 'సముద్రమట్టానికి $1 {{PLURAL:$1|మీటరు|మీటర్లు}} ఎగువన',
'exif-gpsaltitude-below-sealevel' => 'సముద్రమట్టానికి $1 {{PLURAL:$1|మీటరు|మీటర్లు}} దిగువున',

'exif-gpsstatus-a' => 'కొలత జరుగుతూంది',
'exif-gpsstatus-v' => 'కొలత ఇంటర్‌ఆపరేటబిలిటీ',

'exif-gpsmeasuremode-2' => 'ద్వైమానిక కొలమానం',
'exif-gpsmeasuremode-3' => 'త్రిదిశాత్మక కొలమానం',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'గంటకి కిలోమీటర్లు',
'exif-gpsspeed-m' => 'గంటకి మైళ్ళు',
'exif-gpsspeed-n' => 'ముడులు',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'కిలోమీటర్లు',
'exif-gpsdestdistance-m' => 'మైళ్ళు',
'exif-gpsdestdistance-n' => 'నాటికల్ మైళ్ళు',

'exif-objectcycle-a' => 'ఉదయం మాత్రమే',
'exif-objectcycle-p' => 'సాయంత్రం మాత్రమే',
'exif-objectcycle-b' => 'ఉదయమూ మరియు సాయంత్రమూ',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'వాస్తవ దిశ',
'exif-gpsdirection-m' => 'అయస్కాంత దిశ',

'exif-dc-contributor' => 'సహాయకులు',
'exif-dc-date' => 'తేదీ‍‍(లు)',
'exif-dc-publisher' => 'ప్రచురణకర్త',
'exif-dc-relation' => 'సంబంధిత మీడియా',
'exif-dc-rights' => 'హక్కులు',
'exif-dc-source' => 'మీడియా మూలము',
'exif-dc-type' => 'మీడియా యొక్క రకము',

'exif-rating-rejected' => 'తిరస్కరించబడింది',

'exif-isospeedratings-overflow' => '65535 కంటే ఎక్కువ',

'exif-iimcategory-ace' => 'కళలు, సంస్కృతి మరియు వినోదం',
'exif-iimcategory-clj' => 'నేరము మరియు చట్టము',
'exif-iimcategory-dis' => 'విపత్తులు మరియు ప్రమాదాలు',
'exif-iimcategory-fin' => 'ఆర్ధికం మరియు వ్యాపారం',
'exif-iimcategory-edu' => 'విద్య',
'exif-iimcategory-evn' => 'పర్యావరణం',
'exif-iimcategory-hth' => 'ఆరోగ్యం',
'exif-iimcategory-hum' => 'మానవీయ ఆసక్తి',
'exif-iimcategory-lab' => 'కృషి',
'exif-iimcategory-lif' => 'జీవనశైలి మరియు కాలక్షేపం',
'exif-iimcategory-pol' => 'రాజకీయాలు',
'exif-iimcategory-rel' => 'మతం మరియు విశ్వాసం',
'exif-iimcategory-sci' => 'వైజ్ఞానికం మరియు సాంకేతికం',
'exif-iimcategory-soi' => 'సాంఘిక సమస్యలు',
'exif-iimcategory-spo' => 'క్రీడలు',
'exif-iimcategory-war' => 'యుద్ధం, సంఘర్షణలు మరియు అనిశ్చితి',
'exif-iimcategory-wea' => 'వాతావరణం',

'exif-urgency-normal' => 'సాధారణం ($1)',
'exif-urgency-low' => 'తక్కువ ($1)',
'exif-urgency-high' => 'ఎక్కువ ($1)',
'exif-urgency-other' => 'వాడుకరి-నిర్వచిత ప్రాథాన్యత ($1)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'అన్నీ',
'namespacesall' => 'అన్నీ',
'monthsall' => 'అన్నీ',

# Email address confirmation
'confirmemail' => 'ఈ-మెయిలు చిరునామా ధృవీకరించండి',
'confirmemail_noemail' => '[[Special:Preferences|మీ అభిరుచులలో]] ఈమెయిలు అడ్రసు పెట్టి లేదు.',
'confirmemail_text' => '{{SITENAME}}లో ఈ-మెయిలు అంశాల్ని వాడుకునే ముందు మీ ఈ-మెయిలు చిరునామాను నిర్ధారించవలసిన అవసరం ఉంది.
కింది మీటను నొక్కగానే మీరిచ్చిన చిరునామాకు ధృవీకరణ మెయిలు వెళ్తుంది. ఆ మెయిల్లో ఒక సంకేతం కలిగిన ఒక లింకు ఉంటుంది; ఆ లింకును మీ బ్రౌజరులో తెరవండి. ఈ-మెయిలు చిరునామా ధృవీకరణ అయిపోతుంది.',
'confirmemail_pending' => 'ఒక నిర్ధారణ కోడుని మీకు ఇప్పటికే ఈ-మెయిల్లో పంపించాం; కొద్దిసేపటి క్రితమే మీ ఖాతా సృష్టించి ఉంటే, కొత్త కొడు కోసం అభ్యర్థన పంపేముందు కొద్ది నిమిషాలు వేచిచూడండి.',
'confirmemail_send' => 'ఒక ధృవీకరణ సంకేతాన్ని పంపించు',
'confirmemail_sent' => 'ధృవీకరణ ఈ-మెయిలును పంపబడినది',
'confirmemail_oncreate' => 'మీ ఈ-మెయిలు చిరునామాకి ఒక ధృవీకరణ సంకేతాన్ని పంపించాం.
లోనికి ప్రవేశించేందుకు ఆ సంకేతం అవసరంలేదు, కానీ ఈ వికీలో ఈ-మెయిలు ఆధారిత సౌలభ్యాలను చేతనం చేసేముందు దాన్ని ఇవ్వవలసి ఉంటుంది.',
'confirmemail_sendfailed' => '{{SITENAME}} మీ  నిర్ధారణ మెయిలుని పంపలేకపోయింది.
మీ ఈమెయిల్ చిరునామాలో తప్పులున్నాయేమో సరిచూసుకోండి.

మెయిలరు ఇలా చెప్పింది: $1',
'confirmemail_invalid' => 'ధృవీకరణ సంకేతం సరైనది కాదు. దానికి కాలం చెల్లి ఉండవచ్చు.',
'confirmemail_needlogin' => 'మీ ఈమెయిలు చిరునామాని దృవపరచటానికి మీరు $1 ఉండాలి.',
'confirmemail_success' => 'మీ ఈ-మెయిలు చిరునామా ధృవీకరించబడింది.
ఇక [[Special:UserLogin|లోనికి ప్రవేశించి]] వికీని అస్వాదించండి.',
'confirmemail_loggedin' => 'మీ ఈ-మెయిలు చిరునామా ఇప్పుడు రూఢి అయింది.',
'confirmemail_subject' => '{{SITENAME}} ఈ-మెయిలు చిరునామా ధృవీకరణ',
'confirmemail_body' => '$1 ఐపీ చిరునామా నుండి ఎవరో, బహుశా మీరే,
{{SITENAME}}లో "$2" అనే ఖాతాని ఈ ఈ-మెయిలు చిరునామాతో నమోదుచేసుకున్నారు.

ఆ ఖాతా నిజంగా మీదే అని నిర్ధారించేందుకు మరియు {{SITENAME}}లో ఈ-మెయిలు సౌలభ్యాలని
చేతనం చేసుకునేందుకు, ఈ లంకెని మీ విహారిణిలో తెరవండి:

$3

ఒకవేళ ఆ ఖాతా మీది *కాకపోతే*, ఈ-మెయిలు చిరునామా నిర్ధారణని రద్దుచేసేందుకు ఈ లంకెని అనుసరించండి:

$5

ఈ నిర్ధారణా సంకేతం $4కి కాలంచెల్లుతుంది.',
'confirmemail_body_changed' => '$1 ఐపీ చిరునామా నుండి ఎవరో, బహుశా మీరే,
{{SITENAME}}లో "$2" అనే ఖాతా యొక్క ఈ-మెయిలు చిరునామాని ఈ చిరునామాకి మార్చారు.

ఆ ఖాతా నిజంగా మీదే అని నిర్ధారించేందుకు మరియు {{SITENAME}}లో
ఈ-మెయిలు సౌలభ్యాలని పునఃచేతనం చేసుకునేందుకు, ఈ లంకెని మీ విహారిణిలో తెరవండి:

$3

ఒకవేళ ఆ ఖాతా మీది *కాకపోతే*, ఈ-మెయిలు చిరునామా నిర్ధారణని రద్దుచేసేందుకు
ఈ లంకెని అనుసరించండి:

$5

ఈ నిర్ధారణా సంకేతం $4కి కాలంచెల్లుతుంది.',
'confirmemail_invalidated' => 'ఈ-మెయిలు చిరునామా నిర్ధారణని రద్దుచేసాం',
'invalidateemail' => 'ఈ-మెయిలు నిర్ధారణని రద్దుచేయండి',

# Scary transclusion
'scarytranscludedisabled' => '[ఇతరవికీల మూసలను ఇక్కడ వాడటాన్ని అనుమతించటం లేదు]',
'scarytranscludefailed' => '[$1 కొరకు మూసను తీసుకురావటం విఫలమైంది]',
'scarytranscludetoolong' => '[URL మరీ పొడుగ్గా ఉంది]',

# Delete conflict
'deletedwhileediting' => "'''హెచ్చరిక''': మీరు మార్పులు చేయటం మొదలుపెట్టాక ఈ పేజీ తొలగించబడింది!",
'confirmrecreate' => "మీరు పేజీ రాయటం మొదలుపెట్టిన తరువాత [[User:$1|$1]] ([[User talk:$1|చర్చ]]) దానిని తీసివేసారు. దానికి ఈ కారణం ఇచ్చారు: ''$2''
మీరు ఈ పేజీని మళ్ళీ తయారు చేయాలనుకుంటున్నారని ధృవీకరించండి.",
'confirmrecreate-noreason' => 'మీరు మార్చడం మొదలుపెట్టిన తర్వాత ఈ పుటను వాడుకరి [[User:$1|$1]] ([[User talk:$1|చర్చ]]) తొలగించారు. ఈ పుటను మీరు నిజంగానే పునఃసృష్టించాలనుకుంటున్నారని నిర్ధారించండి.',
'recreate' => 'మళ్లీ సృష్టించు',

# action=purge
'confirm_purge_button' => 'సరే',
'confirm-purge-top' => 'ఈ పేజీ యొక్క పాత కాపీని తొలగించమంటారా?',
'confirm-purge-bottom' => 'సత్వరనిల్వ(cache)లోపేజీ నిర్మూలించితే, ఇటీవలి కూర్పు కనబడుతుంది.',

# action=watch/unwatch
'confirm-watch-button' => 'సరే',
'confirm-watch-top' => 'ఈ పుటను మీ వీక్షణ జాబితాలో చేర్చాలా?',
'confirm-unwatch-button' => 'సరే',
'confirm-unwatch-top' => 'ఈ పుటను మీ వీక్షణ జాబితా నుండి తొలగించాలా?',

# Multipage image navigation
'imgmultipageprev' => '← మునుపటి పేజీ',
'imgmultipagenext' => 'తరువాతి పేజీ →',
'imgmultigo' => 'వెళ్ళు!',
'imgmultigoto' => '$1వ పేజీకి వెళ్ళు',

# Language selector for translatable SVGs
'img-lang-default' => '(అప్రమేయ భాష)',
'img-lang-go' => 'వెళ్ళు',

# Table pager
'ascending_abbrev' => 'ఆరోహణ',
'descending_abbrev' => 'అవరోహణ',
'table_pager_next' => 'తరువాతి పేజీ',
'table_pager_prev' => 'ముందరి పేజీ',
'table_pager_first' => 'మొదటి పేజీ',
'table_pager_last' => 'చివరి పేజీ',
'table_pager_limit' => 'పేజీకి $1 అంశాలను చూపించు',
'table_pager_limit_label' => 'పేజీకి ఎన్ని అంశాలు:',
'table_pager_limit_submit' => 'వెళ్ళు',
'table_pager_empty' => 'ఫలితాలు లేవు',

# Auto-summaries
'autosumm-blank' => 'పేజీలోని విషయాన్నంతటినీ తీసేసారు.',
'autosumm-replace' => "పేజీని '$1' తో మారుస్తున్నాం",
'autoredircomment' => '[[$1]]కు దారిమళ్ళించారు',
'autosumm-new' => "'$1' తో కొత్త పేజీని సృష్టించారు",

# Live preview
'livepreview-loading' => 'లోడవుతోంది...',
'livepreview-ready' => 'లోడవుతోంది… సిద్ధం!',
'livepreview-failed' => 'టైపు చేస్తుండగా ప్రీవ్యూ సృష్టించడం కుదరలేదు! మామూలు ప్రీవ్యూను ప్రయత్నించండి.',
'livepreview-error' => 'అనుసంధానం కుదరలేదు: $1 "$2". మామూలు ప్రీవ్యూ ప్రయత్నించి చూడండి.',

# Friendlier slave lag warnings
'lag-warn-normal' => '$1 {{PLURAL:$1|క్షణం|క్షణాల}} లోపు జరిగిన మార్పులు ఈ జాబితాలో కనిపించకపోవచ్చు.',
'lag-warn-high' => 'అధిక వత్తిడి వలన డేటాబేసు సర్వరు వెనుకబడింది, $1 {{PLURAL:$1|క్షణం|క్షణాల}} కంటే కొత్తవైన మార్పులు ఈ జాబితాలో కనిపించకపోవచ్చు.',

# Watchlist editor
'watchlistedit-numitems' => 'మీ వీక్షణ జాబితాలో చర్చాపేజీలు కాకుండా {{PLURAL:$1|1 శీర్షిక|$1 శీర్షికలు}} ఉన్నాయి.',
'watchlistedit-noitems' => 'మీ వీక్షణ జాబితాలో శీర్షికలేమీ లేవు.',
'watchlistedit-normal-title' => 'వీక్షణ జాబితాను మార్చు',
'watchlistedit-normal-legend' => 'వీక్షణ జాబితా నుండి శీర్షికలను తీసివెయ్యి',
'watchlistedit-normal-explain' => 'మీ వీక్షణ జాబితాలోని శీర్షికలను ఈ క్రింద చూపించాం.
ఏదైనా శీర్షికను తీసివేసేందుకు, దాని పక్కనున్న పెట్టెను చెక్ చేసి, "{{int:Watchlistedit-normal-submit}}"ని నొక్కండి.
మీరు [[Special:EditWatchlist/raw|ముడి జాబితాను కూడా మార్చవచ్చు]].',
'watchlistedit-normal-submit' => 'శీర్షికలను తీసివెయ్యి',
'watchlistedit-normal-done' => 'మీ వీక్షణ జాబితా నుండి {{PLURAL:$1|1 శీర్షికను|$1 శీర్షికలను}} తీసివేసాం:',
'watchlistedit-raw-title' => 'ముడి వీక్షణ జాబితాను మార్చు',
'watchlistedit-raw-legend' => 'ముడి వీక్షణ జాబితాను మార్చు',
'watchlistedit-raw-explain' => 'మీ వీక్షణ జాబితాలోని శీర్షికలను ఈ కింద చూపించాం. ఈ జాబితాలో ఉన్నవాటిని తీసివెయ్యడం గానీ కొత్తవాటిని చేర్చడం గానీ (వరుసకొకటి చొప్పున) చెయ్యవచ్చు.
పూర్తయ్యాక, "{{int:Watchlistedit-raw-submit}}" అన్న బొత్తాన్ని నొక్కండి.
మీరు [[Special:EditWatchlist|మామూలు పాఠ్యకూర్పరిని కూడా వాడవచ్చు]].',
'watchlistedit-raw-titles' => 'శీర్షికలు:',
'watchlistedit-raw-submit' => 'వీక్షణ జాబితాను తాజాకరించు',
'watchlistedit-raw-done' => 'మీ వీక్షణ జాబితాను తాజాకరించాం.',
'watchlistedit-raw-added' => '{{PLURAL:$1|1 శీర్షికను|$1 శీర్షికలను}} చేర్చాం:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|1 శీర్షికను|$1 శీర్షికలను}} తీసివేశాం:',

# Watchlist editing tools
'watchlisttools-view' => 'సంబంధిత మార్పులను చూడండి',
'watchlisttools-edit' => 'వీక్షణ జాబితాను చూడండి లేదా మార్చండి',
'watchlisttools-raw' => 'ముడి వీక్షణ జాబితాలో మార్పులు చెయ్యి',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|చర్చ]])',

# Core parser functions
'unknown_extension_tag' => '"$1" అనే ట్యాగు ఈ పొడిగింతకు తెలియదు',
'duplicate-defaultsort' => 'హెచ్చరిక: డిఫాల్టు పేర్చు కీ "$2", గత డిఫాల్టు పేర్చు కీ "$1" ని అతిక్రమిస్తుంది.',

# Special:Version
'version' => 'సంచిక',
'version-extensions' => 'స్థాపించిన పొడగింతలు',
'version-specialpages' => 'ప్రత్యేక పేజీలు',
'version-parserhooks' => 'పార్సరు కొక్కాలు',
'version-variables' => 'చరరాశులు',
'version-antispam' => 'స్పాము నివారణ',
'version-skins' => 'అలంకారాలు',
'version-other' => 'ఇతర',
'version-mediahandlers' => 'మీడియాను ఫైళ్లను నడిపించే పొడిగింపులు',
'version-hooks' => 'కొక్కాలు',
'version-parser-extensiontags' => 'పార్సరు పొడిగింపు ట్యాగులు',
'version-parser-function-hooks' => 'పార్సరుకు కొక్కాలు',
'version-hook-name' => 'కొక్కెం పేరు',
'version-hook-subscribedby' => 'ఉపయోగిస్తున్నవి',
'version-version' => '(సంచిక $1)',
'version-license' => 'లైసెన్సు',
'version-poweredby-credits' => "ఈ వికీ  '''[https://www.mediawiki.org/ మీడియావికీ]'''చే శక్తిమంతం, కాపీహక్కులు  © 2001-$1 $2.",
'version-poweredby-others' => 'ఇతరులు',
'version-poweredby-translators' => 'translatewiki.net అనువాదకులు',
'version-license-info' => 'మీడియావికీ అన్నది స్వేచ్ఛా మృదూపకరణం; మీరు దీన్ని పునఃపంపిణీ చేయవచ్చు మరియు/లేదా ఫ్రీ సాఫ్ట్&zwnj;వేర్ ఫౌండేషన్ ప్రచురించిన గ్నూ జనరల్ పబ్లిక్ లైసెస్సు వెర్షను 2 లేదా (మీ ఎంపిక ప్రకారం) అంతకంటే కొత్త వెర్షను యొక్క నియమాలకు లోబడి మార్చుకోవచ్చు.

మీడియావికీ ప్రజోపయోగ ఆకాంక్షతో పంపిణీ చేయబడుతుంది, కానీ ఎటువంటి వారంటీ లేకుండా; కనీసం ఏదైనా ప్రత్యేక ఉద్దేశానికి సరిపడుతుందని గానీ లేదా వస్తుత్వం యొక్క అంతర్నిహిత వారంటీ లేకుండా. మరిన్ని వివరాలకు గ్నూ జనరల్ పబ్లిక్ లైసెన్సుని చూడండి.

ఈ ఉపకరణంతో పాటు మీకు [{{SERVER}}{{SCRIPTPATH}}/COPYING గ్నూ జనరల్ పబ్లిక్ లైసెన్సు  యొక్క ఒక కాపీ] అందివుండాలి; లేకపోతే, Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA అన్న చిరునామాకి వ్రాయండి లేదా [//www.gnu.org/licenses/old-licenses/gpl-2.0.html జాలం లోనే చదవండి].',
'version-software' => 'స్థాపిత మృదూపకరణాలు',
'version-software-product' => 'ప్రోడక్టు',
'version-software-version' => 'వెర్షను',
'version-entrypoints' => 'ప్రవేశ బిందు చిరునామాలు',
'version-entrypoints-header-entrypoint' => 'ప్రవేశ బిందువు',
'version-entrypoints-header-url' => 'చిరునామా',

# Special:Redirect
'redirect-submit' => 'వెళ్ళు',
'redirect-value' => 'విలువ:',
'redirect-user' => 'వాడుకరి ID',
'redirect-revision' => 'పేజీ కూర్పు',
'redirect-file' => 'దస్త్రపు పేరు',
'redirect-not-exists' => 'విలువ కనబడలేదు',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'ఫైళ్ల మారుప్రతుల కోసం వెతుకు',
'fileduplicatesearch-summary' => 'మారుప్రతుల కోసం ఫైళ్ల హాష్ విలువ ఆధారంగా వెతుకు.',
'fileduplicatesearch-legend' => 'మారుప్రతి కొరకు వెతుకు',
'fileduplicatesearch-filename' => 'ఫైలు పేరు:',
'fileduplicatesearch-submit' => 'వెతుకు',
'fileduplicatesearch-info' => '$1 × $2 పిక్సెళ్లు<br />దస్త్రపు పరిమాణం: $3<br />MIME రకం: $4',
'fileduplicatesearch-result-1' => '"$1" అనే పేరుగల ఫైలుకు సరిసమానమైన మారుప్రతులు లేవు.',
'fileduplicatesearch-result-n' => '"$1" అనే పేరుగల ఫైలుకు {{PLURAL:$2|ఒక మారుప్రతి ఉంది|$2 మారుప్రతులున్నాయి}}.',
'fileduplicatesearch-noresults' => '"$1" అనే పేరుగల దస్త్రమేమీ కనబడలేదు.',

# Special:SpecialPages
'specialpages' => 'ప్రత్యేక పేజీలు',
'specialpages-note-top' => 'సూచిక',
'specialpages-note' => '* మామూలు ప్రత్యేక పుటలు.
* <strong class="mw-specialpagerestricted">నియంత్రిత ప్రత్యేక పుటలు.</strong>
* <span class="mw-specialpagecached">Cached ప్రత్యేక పుటలు (పాతబడి ఉండొచ్చు).</span>',
'specialpages-group-maintenance' => 'నిర్వహణా నివేదికలు',
'specialpages-group-other' => 'ఇతర ప్రత్యేక పేజీలు',
'specialpages-group-login' => 'ప్రవేశించండి / ఖాతాను సృష్టించుకోండి',
'specialpages-group-changes' => 'ఇటీవలి మార్పులు మరియు దినచర్యలు',
'specialpages-group-media' => 'మాధ్యమ నివేదికలు మరియు ఎగుమతులు',
'specialpages-group-users' => 'వాడుకర్లు మరియు హక్కులు',
'specialpages-group-highuse' => 'అధిక వాడుక పేజీలు',
'specialpages-group-pages' => 'పేజీల యొక్క జాబితాలు',
'specialpages-group-pagetools' => 'పేజీ పనిముట్లు',
'specialpages-group-wiki' => 'డాటా మరియు పనిముట్లు',
'specialpages-group-redirects' => 'ప్రత్యేక పేజీల దారిమార్పులు',
'specialpages-group-spam' => 'స్పామ్ పనిముట్లు',

# Special:BlankPage
'blankpage' => 'ఖాళీ పేజీ',
'intentionallyblankpage' => 'బెంచిమార్కింగు, మొదలగు వాటికై ఈ పేజీని కావాలనే ఖాళీగా వదిలాము.',

# External image whitelist
'external_image_whitelist' => ' #ఈ లైనును ఎలా ఉన్నదో అలాగే వదిలెయ్యండి<pre>
#regular expression తునకలను (// ల మధ్య ఉండే భాగం)కింద పెట్టండి
#వీటిని బయటి బొమ్మల URLలతో సరిపోల్చుతాము
#సరిపోలిన బొమ్మలను చూపిస్తాము, మిగిలినవాటి లింకులను మాత్రమే చూపిస్తాము
##తో మొదలయ్యే లైనులు వ్యాఖ్యానాలుగా భావించబడతాయి
#ఇది కేస్-సెన్సిటివ్

#అన్ని తునకలను ఈ లైనుకు పైన ఉంచండి.  ఈ లైనును ఎలా ఉన్నదో అలాగే వదిలెయ్యండి</pre>',

# Special:Tags
'tags' => 'సరైన మార్పు ట్యాగులు',
'tag-filter' => '[[Special:Tags|ట్యాగుల]] వడపోత:',
'tag-filter-submit' => 'వడపోయి',
'tags-title' => 'టాగులు',
'tags-intro' => 'ఈ పేజీ మృదూపకరణం మార్పులకు ఇచ్చే ట్యాగులను, మరియు వాటి అర్ధాలను చూపిస్తుంది.',
'tags-tag' => 'ట్యాగు పేరు',
'tags-display-header' => 'మార్పుల జాబితాలో కనపించు రీతి',
'tags-description-header' => 'అర్థం యొక్క పూర్తి వివరణ',
'tags-hitcount-header' => 'ట్యాగులున్న మార్పులు',
'tags-active-yes' => 'అవును',
'tags-active-no' => 'కాదు',
'tags-edit' => 'మార్చు',
'tags-hitcount' => '$1 {{PLURAL:$1|మార్పు|మార్పులు}}',

# Special:ComparePages
'comparepages' => 'పుటల పోలిక',
'compare-page1' => 'పుట 1',
'compare-page2' => 'పుట 2',
'compare-rev1' => 'కూర్పు 1',
'compare-rev2' => 'కూర్పు 2',
'compare-submit' => 'పోల్చిచూడు',
'compare-invalid-title' => 'మీరు ఇచ్చిన శీర్షిక చెల్లనిది.',
'compare-title-not-exists' => 'మీరు పేర్కొన్న శీర్షిక లేనే లేదు.',
'compare-revision-not-exists' => 'మీరు పేర్కొన్న కూర్పు లేనే లేదు.',

# Database error messages
'dberr-header' => 'ఈ వికీ సమస్యాత్మకంగా ఉంది',
'dberr-problems' => 'క్షమించండి! ఈ సైటు సాంకేతిక సమస్యలని ఎదుర్కొంటుంది.',
'dberr-again' => 'కొన్ని నిమిషాలాగి మళ్ళీ ప్రయత్నించండి.',
'dberr-info' => '(డాటాబేసు సర్వరుని సంధానించలేకున్నాం: $1)',
'dberr-usegoogle' => 'ఈలోపు మీరు గూగుల్ ద్వారా వెతకడానికి ప్రయత్నించండి.',
'dberr-outofdate' => 'మా విషయం యొక్క వారి సూచీలు అంత తాజావి కావపోవచ్చని గమనించండి.',
'dberr-cachederror' => 'అభ్యర్థించిన పేజీ యొక్క కోశం లోని కాపీ ఇది, అంత తాజాది కాకపోవచ్చు.',

# HTML forms
'htmlform-invalid-input' => 'మీరు ఇచ్చినవాటితో కొన్ని సమస్యలున్నాయి',
'htmlform-select-badoption' => 'మీరిచ్చిన విలువ సరైన వికల్పం కాదు.',
'htmlform-int-invalid' => 'మీరు ఇచ్చిన విలువ పూర్ణసంఖ్య కాదు.',
'htmlform-float-invalid' => 'మీరిచ్చిన విలువ ఒక సంఖ్య కాదు.',
'htmlform-int-toolow' => 'మీరిచ్చిన విలువ $1 యొక్క కనిష్ఠ విలువ కంటే తక్కువగా ఉంది.',
'htmlform-int-toohigh' => 'మీరిచ్చిన విలువ $1 యొక్క గరిష్ఠ విలువకంటే ఎక్కవగా ఉంది.',
'htmlform-required' => 'ఈ విలువ తప్పనిసరి',
'htmlform-submit' => 'దాఖలుచెయ్యి',
'htmlform-reset' => 'మార్పులను రద్దుచెయ్యి',
'htmlform-selectorother-other' => 'ఇతర',
'htmlform-no' => 'కాదు',
'htmlform-yes' => 'అవును',

# SQLite database support
'sqlite-has-fts' => '$1 పూర్తి-పాఠ్య అన్వేషణ తోడ్పాటుతో',
'sqlite-no-fts' => '$1 పూర్తి-పాఠ్య అన్వేషణ తోడ్పాటు లేకుండా',

# New logging system
'logentry-delete-delete' => '$1 $3 పేజీని {{GENDER:$2|తొలగించారు}}',
'revdelete-content-hid' => 'కంటెంట్ దాచబడింది',
'revdelete-summary-hid' => 'మార్పుల సారాంశాన్ని దాచారు',
'revdelete-uname-hid' => 'వాడుకరి పేరుని దాచారు',
'revdelete-restricted' => 'నిర్వాహకులకు ఆంక్షలు విధించాను',
'revdelete-unrestricted' => 'నిర్వాహకులకున్న ఆంక్షలను ఎత్తేశాను',
'logentry-move-move' => '$1 $3 పేజీని $4కి తరలించారు',
'logentry-move-move-noredirect' => '$1 $3 పేజీని $4కి దారిమార్పు లేకుండా తరలించారు',
'logentry-move-move_redir' => '$1 $3 పేజీని $4కి దారిమార్పు ద్వారా తరలించారు',
'logentry-move-move_redir-noredirect' => '$1 $3 పేజీని $4కి దారిమార్పు లేకుండా తరలించారు',
'logentry-newusers-newusers' => '$1 వాడుకరి ఖాతాను సృష్టించారు',
'logentry-newusers-create' => '$1 ఒక వాడుకరి ఖాతాను సృష్టించారు',
'logentry-newusers-create2' => '$1  వాడుకరి ఖాతా $3ను సృష్టించారు',
'logentry-newusers-autocreate' => '$1 ఖాతాను ఆటోమెటిగ్గా సృష్టించారు',
'rightsnone' => '(ఏమీలేవు)',

# Feedback
'feedback-subject' => 'విషయం:',
'feedback-message' => 'సందేశం:',
'feedback-cancel' => 'రద్దుచేయి',
'feedback-submit' => 'ప్రతిస్పందనను దాఖలుచేయి',
'feedback-error2' => 'దోషము: సవరణ విఫలమైంది',
'feedback-thanks' => 'కృతజ్ఞతలు! మీ ప్రతిస్పందనను “[$2 $1]” పేజీలో చేర్చాం.',
'feedback-close' => 'పూర్తయ్యింది',
'feedback-bugcheck' => 'అద్భుతం! ఇది ఇప్పటికే [$1 తెలిసిన బగ్గుల]లో లేదని సరిచూసుకోండి.',
'feedback-bugnew' => 'చూసాను. కొత్త బగ్గును నివేదించు',

# Search suggestions
'searchsuggest-search' => 'వెతుకు',

# API errors
'api-error-badaccess-groups' => 'ఈ వికీ లోనికి దస్త్రాలను ఎక్కించే అనుమతి మీకు లేదు.',
'api-error-duplicate-archive-popup-title' => 'నకిలీ {{PLURAL:$1|దస్త్రాన్ని|దస్త్రాలను}} ఇప్పటికే తొలగించారు.',
'api-error-duplicate-popup-title' => 'నకిలీ {{PLURAL:$1|దస్త్రం|దస్త్రాలు}}.',
'api-error-empty-file' => 'మీరు దాఖలుచేసిన ఫైల్ ఖాళీది.',
'api-error-emptypage' => 'కొత్త మరియు ఖాళీ పేజీలను సృష్టించడానికి అనుమతి లేదు.',
'api-error-file-too-large' => 'మీరు సమర్పించిన దస్త్రం చాలా పెద్దగా ఉంది.',
'api-error-filename-tooshort' => 'దస్త్రపు పేరు మరీ చిన్నగా ఉంది.',
'api-error-filetype-banned' => 'ఈ రకపు దస్త్రాలని నిషేధించారు.',
'api-error-filetype-banned-type' => '$1 {{PLURAL:$4|అనేది అనుమతించబడిన ఫైలు రకం కాదు|అనేవి అనుమతించబడిన ఫైలు రకాలు కాదు}}. అనుమతించబడిన {{PLURAL:$3|ఫైలు రకం|ఫైలు రకాలు}} $2.',
'api-error-http' => 'అంతర్గత దోషము: సేవకానికి అనుసంధానమవలేకపోతున్నది.',
'api-error-illegal-filename' => 'ఆ పైల్ పేరు అనుమతించబడదు.',
'api-error-invalid-file-key' => 'అంతర్గత దోషము: తాత్కాలిక నిల్వలో ఫైల్ కనపడలేదు.',
'api-error-mustbeloggedin' => 'దస్త్రాలను ఎక్కించడానికి మీరు ప్రవేశించివుండాలి.',
'api-error-nomodule' => 'అంతర్గత దోషము: ఎక్కింపు పర్వికము అమర్చబడలేదు.',
'api-error-ok-but-empty' => 'అంతర్గత దోషము: సేవకము నుండి ఎటువంటి స్పందనా లేదు.',
'api-error-stashfailed' => 'అంతర్గత పొరపాటు: తాత్కాలిక దస్త్రాన్ని భద్రపరచడంలో సేవకి విఫలమైంది.',
'api-error-unclassified' => 'ఒక తెలియని దోషము సంభవించినది',
'api-error-unknown-code' => 'తెలియని పొరపాటు: "$1".',
'api-error-unknown-error' => 'అంతర్గత పొరపాటు: మీ దస్త్రాన్ని ఎక్కించేప్పుడు ఏదో పొరపాటు జరిగింది.',
'api-error-unknown-warning' => 'తెలియని హెచ్చరిక: $1',
'api-error-unknownerror' => 'తెలియని పొరపాటు: "$1".',
'api-error-uploaddisabled' => 'ఈ వికీలో ఎక్కింపులని అచేతనం చేసారు.',
'api-error-verification-error' => 'ఈ ఫైల్ పాడైవుండవచ్చు, లేదా తప్పుడు పొడిగింతను కలిగివుండవచ్చు.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|క్షణం|క్షణాలు}}',
'duration-minutes' => '$1 {{PLURAL:$1|నిమిషం|నిమిషాలు}}',
'duration-hours' => '$1 {{PLURAL:$1|గంట|గంటలు}}',
'duration-days' => '$1 {{PLURAL:$1|రోజు|రోజులు}}',
'duration-weeks' => '$1 {{PLURAL:$1|వారం|వారాలు}}',
'duration-years' => '$1 {{PLURAL:$1|సంవత్సరం|సంవత్సరాలు}}',
'duration-decades' => '$1 {{PLURAL:$1|దశాబ్దం|దశాబ్దాలు}}',
'duration-centuries' => '$1 {{PLURAL:$1|శతాబ్దం|శతాబ్దాలు}}',
'duration-millennia' => '$1 {{PLURAL:$1|సహస్రాబ్దం|సహస్రాబ్దాలు}}',

# Limit report
'limitreport-cputime-value' => '$1 {{PLURAL:$1|క్షణం|క్షణాలు}}',
'limitreport-walltime-value' => '$1 {{PLURAL:$1|క్షణం|క్షణాలు}}',
'limitreport-templateargumentsize-value' => '$1/$2 {{PLURAL:$2|బైటు|బైట్లు}}',

# Special:ExpandTemplates
'expandtemplates' => 'మూసలను విస్తరించు',
'expand_templates_intro' => 'ఈ ప్రత్యేక పేజీ మీరిచ్చిన మూసలను పూర్తిగా విస్తరించి, చూపిస్తుంది. ఇది <nowiki>{{</nowiki>#language:...}} వంటి పార్సరు ఫంక్షన్లను, <nowiki>{{</nowiki>CURRENTDAY}} వంటి చరరాశులను(వేరియబుల్) కూడా విస్తరిస్తుంది &mdash; నిజానికి జమిలి(మీసాల) బ్రాకెట్లలో ఉన్న ప్రతీదాన్నీ ఇది విస్తరిస్తుంది. మీడియావికీ నుండి సంబంధిత పార్సరు స్టేజిని పిలిచి ఇది ఈ పనిని సాధిస్తుంది.',
'expand_templates_title' => '{{FULLPAGENAME}} మొదలగు వాటి కొరకు సందర్భ శీర్షిక:',
'expand_templates_input' => 'విస్తరించవలసిన పాఠ్యం:',
'expand_templates_output' => 'ఫలితం',
'expand_templates_xml_output' => 'XML ఔట్&zwnj;పుట్',
'expand_templates_ok' => 'సరే',
'expand_templates_remove_comments' => 'వ్యాఖ్యలను తొలగించు',
'expand_templates_generate_xml' => 'XML పార్స్ ట్రీని చూపించు',
'expand_templates_preview' => 'మునుజూపు',

);
