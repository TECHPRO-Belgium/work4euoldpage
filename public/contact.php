<?php
/*
 *  CONFIGURE EVERYTHING HERE
 */

// an email address that will be in the From field of the email.
$from = 'info@thetechpro.be';

// an email address that will receive the email with the output of the form
$sendTo = 'kristo@thetechpro.be';

// subject of the email
$subject = 'New Job Application';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('name' => 'Name', 'surname' => 'Surname', 'need' => 'Need', 'email' => 'Email',
    'message' => 'Message', 'selectprofile' => 'Profile','selectgender'=>'Gender','Appdev'=>'Application design & development',
    'Webdev'=>'Web design & development','male'=>'Male','female'=>'Female',
    'phone' => 'Phone','age' => 'Age', 'Database'=> 'Database Development', 'Systems'=> 'Systems & Infrastructure',
    'Security'=>'Security','selectabilities'=>'Select Abilities','selectbusiness'=>'Business Application', 'developer_analyst'=>'Developer / Analyst Programmer', 'content_creator'=>'Content Creator',
    'graphic_webdes'=>'Graphics / Web Designer ', 'uxui_specialist'=>'UX / UI Specialist ','seo_specialist'=>'SEO / SEA Specialist','digitalmark'=>'Digital Marketer','business_analyst'=>'Business Analyst',
    'functional_analyst'=>'Functional Analyst','process_analyst'=>'Process Analyst','tech_analyst'=>'Technical Analyst','application_solution_architect'=>'Application / Solution Architect','enterprise_arch'=>'Enterprise Architect',
    'infrastructure_arch'=>'Infrastructure Architect','soa_spec'=>'SOA Specialist','quality_spec'=>'Quality Specialist','test_validat_eng'=>'Test / Validation Engineer','test_validation_manager'=>'Test / Validation Manager',
    'tech_writer'=>'Technical Writer','big_data'=>'Big Data Expert', 'database'=>'Database Architect','database_dev'=>'Database Developer','db_admin'=>'Database Administrator','helpdesk_support'=>'Helpdesk Support',
    'operator'=>'Operator','field_maintence_eng'=>'Field / Maintenance Engineer','incident_prob_manager'=>'Incident & Problem Manager','system_eng_admin'=>'System Engineer / Administrator','devops_eng'=>'DevOps Engineer',
    'network_telecom_eng'=>'Network / Telecom Engineer','security_eng'=>'Security Engineer','soft_admin'=>'Software Administrator','project_manager_cordinator'=>'Project Manager / Coordinator','selectlanguage'=>'Select Languages',
    'net'=>'.NET','asp'=>'ASP.NET','c_sharp'=>'C#','vb_net'=>'VB.NET','abap'=>'Abap','access'=>'Access','ajax'=>'Ajax','asp_'=>'ASP','c_pluse'=>'C/C++','cobol'=>'Cobol','cocoa'=>'Cocoa','cold_fusion'=>'ColdFusion',
    'css'=>'CSS / CSS3','delphi'=>'Delphi','flash'=>'Flash','flex'=>'Flex / Air','html'=>'HTML5','xhtml'=>'XHTML','ide'=>'IDE','eclipse'=>'Eclipse','intellij'=>'IntelliJ',
    'netbeans'=>'Netbeans','visual_s'=>'Visual Studio','zend_s'=>'Zend Studio','java_jee'=>'Java / J2EE','ejb'=>'EJB','grails'=>'Grails','gwt'=>'GWT','jme'=>'J2ME','tomcat'=>'JBoss (WildFly) / Tomcat','jpa'=>'JPA / Hibernate',
    'jsf'=>'JSF','servlets'=>'JSP / Servlets','junit'=>'JUnit','maven'=>'Maven','spring'=>'Spring','struts'=>'Struts','javascript'=>'JavaScript','angularjs'=>'AngularJS','jquery'=>'JQuery',
    'nodejs'=>'Node.js','reactjs'=>'ReactJS','lotus'=>'Lotus Notes','phonegap'=>'PhoneGap','mssql'=>'MS SQL','mysql'=>'MySQL','natural'=>'Natural','objectivec'=>'Objective-C','oracle'=>'Oracle','forms_rep'=>'Forms / Reports',
    'plsql'=>'PL SQL','perl'=>'Perl','photoshop'=>'Photoshop','php'=>'PHP','symfony'=>'Symfony','yii'=>'YII','zend'=>'Zend','pl1'=>'PL1','powerbuilder'=>'PowerBuilder','python'=>'Python',
    'rpg'=>'PRG','ruby'=>'Ruby','sas'=>'SAS','shell'=>'Shell','sql'=>'SQL','uml'=>'UML','vba'=>'VBA','visual_basic'=>'Visual Basic','windev_webdev'=>'WinDev / WebDev','xml_xsl_xslt'=>'XML / XSL / XSLT','selectsystem'=>'System',
    'aces'=>'Access','adabas'=>'Adabas','antispam'=>'Antispam','antivirus'=>'Antivirus','apache'=>'Apache','biztalk'=>'BizTalk',
    'citrix'=>'Citrix','cloud'=>'Cloud','db2'=>'DB2','desktop_pc'=>'Desktop PC','embedded_real'=>'Embedded Real Time','hardware'=>'Hardware','iis_'=>'IIS','informix'=>'Informix','iseries_as'=>'iSeries (AS/400)','linux'=>'Linux',
    'lotus_notes_domino'=>'Lotus Notes Domino','mac_os'=>'Mac OS','mainframe'=>'Mainframe','middleware'=>'Middleware','cics'=>'CICS','mq_series'=>'MQ Series','tibco'=>'Tibco','tuxedo'=>'Tuxedo','mongo_db'=>'MongoDB',
    'ms_exchange_server'=>'MS Exchange Server','ms_office'=>'MS Office','my_sql_'=>'MySQL','network'=>'Network','avaya'=>'Avaya','cisco'=>'Cisco','dns'=>'DNS','firewall'=>'Firewall','san'=>'SAN','soap'=>'SOAP','tcp_ip'=>'TCP/IP',
    'vpn'=>'VPN','wan_lan'=>'WAN / LAN','novell'=>'Novell','oracle_'=>'Oracle','pos_terminal'=>'POS Terminal','postgresql'=>'PostgreSQL','remedy'=>'Remedy','security_'=>'Security','share_point'=>'SharePoint','sql_server'=>'SQL Server',
    'storage_'=>'Storage','sybase'=>'Sybase','telecom'=>'Telecom','3g_4g'=>'3G/4G','gsm_gprs_edge'=>'GSM/GPRS/EDGE','radio'=>'Radio','voip'=>'VoIP','tivoli'=>'Tivoli','unix'=>'Unix','aix'=>'AIX',
    'hp_ux'=>'HP-UX','solaris'=>'Solaris','version_control_system'=>'Version Control System (VCS)','cvs'=>'CVS','git'=>'GIT','mercurial'=>'Mercurial','microsoft_tfs'=>'Microsoft TFS','svn'=>'SVN','vmware'=>'VMware',
    'web_logic'=>'WebLogic','web_sphere_server'=>'WebSphere AppServer','windows'=>'Windows','windows_server'=>'Windows Server','z_os'=>'Z/OS – OS/400','business_intelligence'=>'Business Intelligence',
    'business_objects'=>'Business Objects','cognos'=>'Cognos','microsoft_bi'=>'Microsoft BI','micro_strategy'=>'MicroStrategy','oracle_bi'=>'Oracle BI','sas'=>'SAS','cms'=>'CMS','alfresco'=>'Alfresco','drupal'=>'Drupal','joomla'=>'Joomla','liferay'=>'Liferay',
    'magento'=>'Magento','wordpress'=>'Wordpress','crm'=>'CRM','documentum'=>'Documentum','erp'=>'ERP','etl_datawarehouse'=>'ETL Datawarehouse','bodi'=>'BODI','datastage'=>'DataStage','informatica_powercenter'=>'Informatica PowerCenter',
    'oracle_warehouse_builder'=>'Oracle Warehouse Builde','ssis'=>'SSIS','jd_edwards'=>'JD Edwards','ms_dynamics'=>'MS Dynamics','axapta'=>'Axapta','navision'=>'Navision','murex'=>'Murex','oracle_application_server'=>'Oracle Application Server',
    'oracle_business_suite'=>'Oracle E-Business Suite','peoplesoft'=>'PeopleSoft','salesforce'=>'Salesforce','sap'=>'SAP','bc'=>'BC','bw_bi'=>'BW/BI','fi_co'=>'FI/CO','hcm'=>'HCM',
    'is_u'=>'IS-U','pm'=>'PM','pp'=>'PP','ps'=>'PS','qm'=>'QM','sd_mm'=>'SD/MM','wm'=>'WM','xi_netweaver'=>'XI/Netweaver','siebel'=>'Siebel','swift'=>'Swift',);

// message that will be displayed when everything is OK :)
$okMessage = 'Application form successfully submitted. Thank you, We will get back to you soon!';

// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later';

/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try
{

    if(count($_POST) == 0) throw new \Exception('Form is empty');

    $emailText = "You have a new message from your contact form\n=============================\n";

    foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email 
        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }

    }

    // All the neccessary headers for the email.
    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from,
    );

    // Send email
    mail($sendTo, $subject, $emailText, implode("\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}
