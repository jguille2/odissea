<?PHP // $Id: role.php,v 1.21 2010/06/28 14:40:01 ueu_ueu Exp $ 
      // role.php - created with Moodle 1.9.4+ (Build: 20090218) (2007101541)


$string['addinganewrole'] = 'Rol berria gehitzen';
$string['addingrolebycopying'] = '$a-n oinarritutako rol berria gehitzen';
$string['addrole'] = 'Gehitu beste rol bat';
$string['allow'] = 'Baimendu';
$string['allowassign'] = 'Rolak esleitzea baimendu';
$string['allowed'] = 'Baimenduta';
$string['allowoverride'] = 'Baimendu rolak baliogabetzea';
$string['allowroletoassign'] = 'Utzi {$a->fromrole} rola duten erabiltzaileei {$a->targetrole} rola esleitzen';
$string['allowroletooverride'] = 'Utzi {$a->fromrole} rola duten erabiltzaileei {$a->targetrole} rola kentzen';
$string['allowroletoswitch'] = 'Utzi {$a->fromrole} rola duten erabiltzaileei {$a->targetrole} rola aukeratzen';
$string['allowswitch'] = 'Baimendu beste rol bat aukeratzea';
$string['allsiteusers'] = 'Guneko erabiltzaile guztiak';
$string['archetype'] = 'Rol arketipoa';
$string['archetypecoursecreator'] = 'ARKETIPOA: Ikastaro-sortzailea';
$string['archetypeeditingteacher'] = 'ARKETIPOA: Irakaslea (edizio-baimenduna)';
$string['archetypefrontpage'] = 'ARKETIPOA: Autentifikatutako erabiltzailea hasiera-orrian';
$string['archetypeguest'] = 'ARKETIPOA: Bisitaria';
$string['archetypemanager'] = 'ARKETIPOA: Kudeatzailea';
$string['archetypestudent'] = 'ARKETIPOA: Ikaslea';
$string['archetypeteacher'] = 'ARKETIPOA: Irakaslea (edizio-baimenik gabea)';
$string['archetypeuser'] = 'ARKETIPOA: Autentifikatutako erabiltzailea';
$string['assignanotherrole'] = 'Esleitu beste rol bat';
$string['assignerror'] = 'Errorea $a->user erabiltzaileari $a->role rola ezartzean.';
$string['assignglobalroles'] = 'Rol globalak esleitu';
$string['assignmentcontext'] = 'Esleipenaren testuingurua';
$string['assignmentoptions'] = 'Esleipenaren aukerak';
$string['assignrolenameincontext'] = 'Esleitu $a->role rola $a->context testuinguruan';
$string['assignroles'] = 'Rolak esleitu';
$string['assignroles_help'] = 'Erabiltzaile bati testuinguru batean rol bat esleituta rol horren baimenak ematen dizkiozu testuinguru horretarako eta hortik beherakoetarako. Adibidez, erabiltzaile bati ikastaroan ikaslea rola esleitzen badiozu, ikaslea rola izango du ikastaroko jarduera eta bloke guztietarako.';
$string['assignroles_link'] = 'admin/roles/assign';
$string['assignrolesin'] = 'Rolak esleitu hemen: $a';
$string['backtoallroles'] = 'Rol guztien zerrendara itzuli';
$string['backup:backupactivity'] = 'Jardueren segurtasun-kopia egin';
$string['backup:backupcourse'] = 'Ikastaroen segurtasun-kopia egin';
$string['backup:backupsection'] = 'Atalen segurtasun-kopia egin';
$string['backup:backuptargethub'] = 'Bilguneetarako segurtasun-kopia egin';
$string['backup:backuptargetimport'] = 'Inportatzeko segurtasun-kopia egin';
$string['backup:configure'] = 'Ezarri segurtasun-kopiaren aukerak';
$string['backup:downloadfile'] = 'Jaitsi fitxategiak segurtasun-kopien eremutik';
$string['backup:userinfo'] = 'Erabiltzaile-datuen segurtasun-kopia';
$string['block:edit'] = 'Blokearen ezarpenak editatu';
$string['block:view'] = 'Blokea ikusi';
$string['blog:associatecourse'] = 'Lotu blog-sarrerak eta ikastaroak';
$string['blog:associatemodule'] = 'Lotu blog-sarrerak eta jarduera-moduluak';
$string['blog:create'] = 'Blog-sarrera berriak sortu';
$string['blog:manageentries'] = 'Sarrerak editatu eta kudeatu';
$string['blog:manageexternal'] = 'Kanpoko blogak editatu eta kudeatu';
$string['blog:manageofficialtags'] = 'Etiketa ofizialak kudeatu';
$string['blog:managepersonaltags'] = 'Etiketa pertsonalak kudeatu';
$string['blog:search'] = 'Blog-sarrerak bilatu';
$string['blog:view'] = 'Blog-sarrerak ikusi';
$string['blog:viewdrafts'] = 'Ikusi blog-sarreren zirriborroa';
$string['calendar:manageentries'] = 'Egutegiko edozein sarrera kudeatu';
$string['calendar:managegroupentries'] = 'Egutegian norberaren sarrerak kudeatu';
$string['calendar:manageownentries'] = 'Norberaren egutegiko sarrerak kudeatu';
$string['capabilities'] = 'Gaitasunak';
$string['capability'] = 'Gaitasuna';
$string['category:create'] = 'Kategoriak sortu';
$string['category:delete'] = 'Kategoriak ezabatu';
$string['category:manage'] = 'Kategoriak kudeatu';
$string['category:update'] = 'Kategoriak eguneratu';
$string['category:viewhiddencategories'] = 'Ezkutuko kategoriak ikusi';
$string['category:visibility'] = 'Ezkutuko kategoriak ikusi';
$string['checkglobalpermissions'] = 'Egiaztatu sistemako baimenak';
$string['checkpermissions'] = 'Egiaztatu baimenak';
$string['checkpermissionsin'] = 'Egiaztatu baimenak hemen: {$a}';
$string['checksystempermissionsfor'] = 'Egiaztatu baimenak honentzat: {$a->fullname}';
$string['checkuserspermissionshere'] = 'Egiaztatu baimenak {$a->fullname} -(r)entzat {$a->contextlevel} testuinguruan';
$string['chooseroletoassign'] = 'Mesedez, aukera ezazu esleitu beharreko rola';
$string['cohort:assign'] = 'Kohorteko partaideak gehitu eta kendu';
$string['cohort:manage'] = 'Kohorteak sortu, ezabatu eta mugitu';
$string['cohort:view'] = 'Gunean zeharreko kohorteak ikusi';
$string['comment:delete'] = 'Iruzkinak ezabatu';
$string['comment:post'] = 'Iruzkinak egin';
$string['comment:view'] = 'Iruzkinak irakurri';
$string['confirmaddadmin'] = 'Benetan gehitu nahi al duzu <strong>{$a}</strong> erabiltzailea guneko kudeatzaile gisa?';
$string['confirmdeladmin'] = 'Benetan kendu nahi al duzu <strong>{$a}</strong> erabiltzailea guneko kudeatzaileen zerrendatik?';
$string['confirmroleprevent'] = 'Benetan kendu nahi al duzu <strong>{$a->role}</strong> {$a->context} testuinguruan {$a->cap} gaitasuna baimenduta duten rolen zerrendatik?';
$string['confirmroleunprohibit'] = 'Benetan kendu nahi al duzu <strong>{$a->role}</strong> {$a->context} testuinguruan {$a->cap} gaitasuna debekatuta duten rolen zerrendatik?';
$string['context'] = 'Testuingurua';
$string['course:activityvisibility'] = 'Jarduerak ezkutatu/erakutsi';
$string['course:bulkmessaging'] = 'Mezua jende askori bidali';
$string['course:changecategory'] = 'Ikastaro-kategoria aldatu';
$string['course:changefullname'] = 'Ikastaroaren izen osoa aldatu';
$string['course:changeidnumber'] = 'Ikastaroaren ID zenbakia aldatu';
$string['course:changeshortname'] = 'Ikastaroaren izen laburra aldatu';
$string['course:changesummary'] = 'Ikastaroaren laburpena aldatu';
$string['course:create'] = 'Ikastaroak sortu';
$string['course:delete'] = 'Ikastaroak ezabatu';
$string['course:manageactivities'] = 'Jarduerak kudeatu';
$string['course:managefiles'] = 'Fitxategiak kudeatu';
$string['course:managegrades'] = 'Kalifikazioak kudeatu';
$string['course:managegroups'] = 'Taldeak kudeatu';
$string['course:managemetacourse'] = 'Metaikastaroak kudeatu';
$string['course:managescales'] = 'Eskalak kudeatu';
$string['course:publish'] = 'Argitaratu ikastaroa komunitatean';
$string['course:request'] = 'Ikastaro berriak eskatu';
$string['course:reset'] = 'Ikastaroa berrabiarazi';
$string['course:sectionvisibility'] = 'Atalaren ikusgarritasuna kontrolatu';
$string['course:setcurrentsection'] = 'Oraingo atala zehaztu';
$string['course:update'] = 'Ikastaroaren ezaugarriak eguneratu';
$string['course:useremail'] = 'E-posta helbidea gaitu/ezgaitu';
$string['course:view'] = 'Ikastaroak ikusi';
$string['course:viewcoursegrades'] = 'Ikastaroaren kalifikazioak ikusi';
$string['course:viewhiddenactivities'] = 'Ezkutuko jarduerak ikusi';
$string['course:viewhiddencourses'] = 'Ezkutuko ikastaroak ikusi';
$string['course:viewhiddensections'] = 'Ezkutuko atalak ikusi';
$string['course:viewhiddenuserfields'] = 'Ezkutuko erabiltzaile-eremuak ikusi';
$string['course:viewparticipants'] = 'Partaideak ikusi';
$string['course:viewscales'] = 'Eskalak ikusi';
$string['course:visibility'] = 'Ikastaroak ezkutatu/erakutsi';
$string['createhiddenassign'] = 'Ezkutuko rol-esleipenak sortu';
$string['createrolebycopying'] = 'Sortu rol berria {$a} kopiatuta';
$string['createthisrole'] = 'Rol hau sortu';
$string['currentcontext'] = 'Oraingo testuingurua';
$string['currentrole'] = 'Oraingo rola';
$string['defaultrole'] = 'Berezko rola';
$string['defaultx'] = 'Berezkoa: {$a}';
$string['defineroles'] = 'Rolak definitu';
$string['deletecourseoverrides'] = 'Ezabatu ikastaroan baliogabetutako baimen guztiak';
$string['deletelocalroles'] = 'Ezabatu rol-esleipen lokal guztiak';
$string['deleterolesure'] = 'Ziur al zaude {\"$a->name} ({$a->shortname})\" rola ezabatu nahi duzula?</p><p> Une honetan {$a->count} erabiltzailek dute rol hori.';
$string['deletexrole'] = '{$a} rola ezabatu';
$string['duplicaterole'] = 'Rola bikoiztu';
$string['duplicaterolesure'] = 'Ziur zaude \"{$a->name} ({$a->shortname})\" rola bikoiztu nahi duzula?</p>';
$string['editingrolex'] = '\'{$a}\' rola editatzen';
$string['editrole'] = 'Rola editatu';
$string['editxrole'] = '{$a} rola editatu';
$string['enrolmentoptions'] = 'Matrikulazioaren aukerak';
$string['errorbadrolename'] = 'Rol-izen ezegokia';
$string['errorbadroleshortname'] = 'Rol-izen ezegokia';
$string['errorexistsrolename'] = 'Rol-izen hori dagoeneko badago';
$string['errorexistsroleshortname'] = 'Rol-izen hori dagoeneko badago';
$string['existingadmins'] = 'Oraingo guneko kudeatzaileak';
$string['existingusers'] = '{$a} erabiltzaile daude';
$string['explainpermission'] = 'Azaldu baimena';
$string['explanation'] = 'Azalpena';
$string['extusers'] = 'Dagoeneko dauden erabiltzaileak';
$string['frontpageuser'] = 'Autentifikatutako erabiltzailea hasiera-orrian';
$string['globalrole'] = 'Rol globala';
$string['globalroleswarning'] = 'KONTUZ! Orri honetatik esleitzen dituzun rol guztiak aukeratutako erabiltzaile guztiei emango zaizkie sisteman, ikastaro guztietan eta hasiera-orrian barne.';
$string['gotoassignroles'] = 'Joan rolak ezartzera testuinguru honetan: $a->contextlevel';
$string['gotoassignsystemroles'] = 'Joan sistemako rolak ezartzera';
$string['grade:edit'] = 'Kalifikazioak editatu';
$string['grade:export'] = 'Kalifikazioak esportatu';
$string['grade:hide'] = 'Kalifikazioak ezkutatu';
$string['grade:import'] = 'Kalifikazioak inportatu';
$string['grade:lock'] = 'Kalifikazioak blokeatu';
$string['grade:manage'] = 'Kalifikazio-elementuak kudeatu';
$string['grade:manageletters'] = 'Letra duten kalifikazioak kudeatu';
$string['grade:manageoutcomes'] = 'Kalifikazioen emaitzak kudeatu';
$string['grade:override'] = 'Baliogabetu kalifikazioak';
$string['grade:unlock'] = 'Kalifikazioak edo elementuak desblokeatu';
$string['grade:view'] = 'Norberaren kalifikazioak ikusi';
$string['grade:viewall'] = 'Beste erabiltzaile batzuen kalifikazioak ikusi';
$string['grade:viewhidden'] = 'Ezkutuko kalifikazioak ikusi';
$string['hidden'] = 'Ezkutuan';
$string['inactiveformorethan'] = '{$a->timeperiod} baino gehiagoz parte hartu gabe';
$string['ingroup'] = 'talde honetan: \"{$a->group}\"';
$string['inherit'] = 'Heredatutakoa';
$string['legacy:admin'] = 'HEREDATUTAKO ROLA: Kudeatzailea';
$string['legacy:coursecreator'] = 'HEREDATUTAKO ROLA: Ikastaro-sortzailea';
$string['legacy:editingteacher'] = 'HEREDATUTAKO ROLA: Irakaslea (edizio baimenduna)';
$string['legacy:guest'] = 'HEREDATUTAKO ROLA: Bisitaria';
$string['legacy:student'] = 'HERADATUTAKO ROLA: Ikaslea';
$string['legacy:teacher'] = 'HERADATUTAKO ROLA: Irakaslea (editatzeko baimenik gabea)';
$string['legacy:user'] = 'HERADATUTAKO ROLA: Autentifikatutako erabiltzailea';
$string['legacytype'] = 'Heredatutako rol-mota';
$string['listallroles'] = 'Rol guztiak zerrendatu';
$string['localroles'] = 'Jarduera honi esleitutako rolak';
$string['manager'] = 'Kudeatzaileak';
$string['managerdescription'] = 'Arduradunak ikastaroan sar daiteke eta aldatu baina normalean ez du parte hartzen ikastaroetan.';
$string['manageroles'] = 'Rolak kudeatu';
$string['maybeassignedin'] = 'Rol hau eslei daitekeen testuinguru-motak';
$string['metaassignerror'] = 'Ezin zaio \"{$a}\" erabiltzaileari rol hau ezarri horretarako metaikastaroak kudeatzeko baimena izan behar baitu.';
$string['metaunassignerror'] = '\"{$a}\" erabiltzailearen rola automatikoki berrezarri da; mesedez, kendu rola azpiko ikastaroetan.';
$string['morethan'] = '{$a} baino gehiago';
$string['multipleroles'] = 'Hainbat rol';
$string['my:manageblocks'] = 'Nire Moodle orriaren blokeak kudeatu';
$string['neededroles'] = 'Baimena duten rolak';
$string['nocapabilitiesincontext'] = 'Ez duzu horretarako baimenik testuinguru honetan';
$string['noneinthisx'] = 'Bat ere ez {$a} honetan';
$string['notabletoassignroleshere'] = 'Ez duzu baimenik hemen inongo rolik esleitzeko';
$string['notabletooverrideroleshere'] = 'Ez duzu baimenik hemen baimenik kentzeko inongo roli';
$string['notes:manage'] = 'Oharrak kudeatu';
$string['notes:view'] = 'Oharrak ikusi';
$string['notset'] = 'Ezarri gabea';
$string['overrideanotherrole'] = 'Baliogabetu beste rol bat';
$string['overridecontext'] = 'Baliogabetu testuingurua';
$string['overridepermissions'] = 'Baliogabetu baimenak';
$string['overridepermissions_link'] = 'admin/roles/override';
$string['overridepermissionsforrole'] = 'Baliogabetu baimenak \'{$a->role}\' rolarentzat {$a->context} testuinguruan';
$string['overridepermissionsin'] = 'Baliogabetu baimenak hemen: {$a}';
$string['overrideroles'] = 'Baliogabetu rolak';
$string['overriderolesin'] = 'Baliogabetu rolak hemen: {$a}';
$string['overrides'] = 'Baliogabetu';
$string['overridesbycontext'] = 'Baliogabetu (testuinguruaren arabera)';
$string['permission'] = 'Baimena';
$string['permissions'] = 'Baimenak';
$string['permissionsforuser'] = 'Baimenak  {$a} erabiltzailearentzat';
$string['permissionsincontext'] = 'Baimenak hemen: {$a}';
$string['portfolio:export'] = 'Portfolioetara esportatu';
$string['potentialusers'] = '{$a} balizko erabiltzaile';
$string['potusers'] = 'Balizko erabiltzaileak';
$string['prevent'] = 'Debekatu';
$string['prohibit'] = 'Ukatu';
$string['prohibitedroles'] = 'Ukatuta';
$string['question:add'] = 'Beste galdera bat gehitu';
$string['question:config'] = 'Galdera-motak konfiguratu';
$string['question:editall'] = 'Galdera guztiak editatu';
$string['question:editmine'] = 'Norberaren galderak editatu';
$string['question:managecategory'] = 'Galdera-kategoriak kudeatu';
$string['question:moveall'] = 'Galderak guztiak mugitu';
$string['question:movemine'] = 'Zure galderak mugitu';
$string['question:useall'] = 'Galdera guztiak erabili';
$string['question:usemine'] = 'Zure galderak erabili';
$string['question:viewall'] = 'Galdera guztiak ikusi';
$string['question:viewmine'] = 'Norberaren galderak ikusi';
$string['resetrole'] = 'Berezko baloreetara ekarri';
$string['resetrolenolegacy'] = 'Baimenak garbitu';
$string['resetrolesure'] = 'Ziur al zaude \"$a->name ($a->shortname)\" rola berezko baloreetara ekarri nahi duzula?<p></p>Aukeratutako ($a->legacytype) heredatutako gaitasunetik hartzen dira berezko baloreak';
$string['resetrolesurenolegacy'] = 'Ziur al zaude \"$a->name ($a->shortname)\" rolean definitutako baimen guztiak ezabatu nahi dituzula?';
$string['restore:configure'] = 'Ezarri berreskuratzeko aukerak';
$string['restore:restoreactivity'] = 'Jarduerak berreskuratu';
$string['restore:restorecourse'] = 'Ikastaroak berreskuratu';
$string['restore:restoresection'] = 'Atalak berreskuratu';
$string['restore:userinfo'] = 'Erabiltzailearen datuak berreskuratu';
$string['risks'] = 'Arriskuak';
$string['role:assign'] = 'Erabiltzaileei rolak ezarri';
$string['role:manage'] = 'Rolak sortu eta kudeatu';
$string['role:override'] = 'Besteentzako baimenak baliogabetu';
$string['role:review'] = 'Besteentzako baimenak berrikusi';
$string['role:safeoverride'] = 'Besteentzako baimen seguruak baliogabetu';
$string['role:switchroles'] = 'Beste rol bat hartu';
$string['role:unassignself'] = 'Berezko rolak kendu';
$string['role:viewhiddenassigns'] = 'Ezkutuko rol-esleipenak ikusi';
$string['roleallowinfo'] = 'Aukeratu {$a->context} testuinguruan, {$a->cap} gaitasuna, baimendutako rolen zerrendan gehitzeko rol bat:';
$string['roleassignments'] = 'Rol ezarpenak';
$string['roledefinitions'] = 'Rolaren definizioak';
$string['roleprohibitinfo'] = 'Aukeratu {$a->context} testuinguruan, {$a->cap} gaitasuna, debekatutako rolen zerrendan gehitzeko rol bat:';
$string['roles'] = 'Rolak';
$string['roles_help'] = 'Rola testuinguru jakinetan erabiltzaileei eslei dakiekeen sistemak definitutako baimen-multzoa da';
$string['roles_link'] = 'rolak';
$string['roleselect'] = 'Aukeratu rola';
$string['roletoassign'] = 'Ezarri beharreko rola';
$string['roletooverride'] = 'Baliogabetu beharreko rola';
$string['safeoverridenotice'] = 'Oharra: Arrisku gehien dituzten gaitasunak blokeatuta daude zeuk baino ezin baitituzu baimen seguruak baliogabetu';
$string['selectanotheruser'] = 'Aukeratu beste erabilztaile bat';
$string['selectauser'] = 'Aukeratu erabiltzaile bat';
$string['selectrole'] = 'Aukeratu rol bat';
$string['showallroles'] = 'Erakutsi rol guztiak';
$string['showthisuserspermissions'] = 'Erabiltzaile honen baimenak erakutsi';
$string['site:accessallgroups'] = 'Talde guztietarako sarbidea';
$string['site:approvecourse'] = 'Ikastaroak sortzeko baimena eman';
$string['site:backup'] = 'Ikastaroen segurtasun-kopiak egin';
$string['site:config'] = 'Gunearen konfigurazioa aldatu';
$string['site:doanything'] = 'Edozertarako baimena';
$string['site:doclinks'] = 'Gunetik kanpoko dokumentuetarako estekak erakutsi';
$string['site:import'] = 'Ikastarora beste ikastaro batzuk inportatu';
$string['site:langeditlocal'] = 'Hizkuntza-pakete lokalak editatu';
$string['site:langeditmaster'] = 'Hizkuntza-pakete nagusiak editatu';
$string['site:manageblocks'] = 'Blokeak gune osoan kudeatu';
$string['site:mnetloginfromremote'] = 'Urrutiko Moodle batetik sarbidea izan';
$string['site:mnetlogintoremote'] = 'Urrutiko Moodle batera joan';
$string['site:readallmessages'] = 'Gune osoko mezuak irakurri';
$string['site:restore'] = 'Ikastaroak berrabiarazi';
$string['site:sendmessage'] = 'Mezuak edozein erabiltzaileri bidali';
$string['site:trustcontent'] = 'Bidalitako edukietan konfiantza izan';
$string['site:uploadusers'] = 'Erabiltzaile berriak fitxategi batetik igo';
$string['site:viewfullnames'] = 'Erabiltzaileen izen osoak ikusi beti';
$string['site:viewparticipants'] = 'Partaideak ikusi';
$string['site:viewreports'] = 'Txostenak ikusi';
$string['siteadministrators'] = 'Guneko kudeatzaileak';
$string['tag:create'] = 'Beste etiketa batzuk sortu';
$string['tag:edit'] = 'Dauden etiketak editatu';
$string['tag:editblocks'] = 'Blokeak etiketa-orrietan editatu';
$string['tag:manage'] = 'Etiketa guztiak kudeatu';
$string['thisusersroles'] = 'Erabiltzaile honen rol-esleipenak';
$string['unassignerror'] = 'Errorea {$a->user} erabiltzaileari {$a->role} rola kentzean';
$string['user:changeownpassword'] = 'Norberaren pasahitza aldatu';
$string['user:create'] = 'Erabiltzaileak sortu';
$string['user:delete'] = 'Erabiltzaileak editatu';
$string['user:editownprofile'] = 'Norberaren profila editatu';
$string['user:editprofile'] = 'Erabiltzailearen profila editatu';
$string['user:loginas'] = 'Beste erabiltzaile bat bezala sartu';
$string['user:readuserblogs'] = 'Erabiltzaileen blog guztiak ikusi';
$string['user:readuserposts'] = 'Erabiltzaileen mezu guztiak ikusi';
$string['user:update'] = 'Erabiltzaileen profilak eguneratu';
$string['user:viewdetails'] = 'Erabiltzailearen profila ikusi';
$string['user:viewhiddendetails'] = 'Erabiltzaileen ezkutuko xehetasunak ikusi';
$string['user:viewuseractivitiesreport'] = 'Erabiltzaileen jarduera-txostenak ikusi';
$string['user:viewusergrades'] = 'Erabiltzaileen kalifikazioak ikusi';
$string['userhashiddenassignments'] = 'Erabiltzaile honek ikastaro honetan ezkutuko rol-esleipen bat baino gehiago du';
$string['usersinthisx'] = 'Erabiltzaileak {$a} honetan';
$string['userswithrole'] = 'Rol hau duten erabiltzaile guztiak';
$string['userswiththisrole'] = 'Rol hau duten erabiltzaileak';
$string['useshowadvancedtochange'] = 'Erabili \'Erakutsi aurreratuak\' aldatzeko';
$string['viewingdefinitionofrolex'] = 'Ikusi \'{$a}\' rolaren definizioa';
$string['viewrole'] = 'Rolaren xehetasunak ikusi';
$string['webservice:createtoken'] = 'Web-zerbitzurako token-a sortu';
$string['whydoesuserhavecap'] = 'Zergatik du {$a->fullname}-k {$a->capability} gaitasuna {$a->context} testuinguruan?';
$string['whydoesusernothavecap'] = 'Zergatik ez du {$a->fullname}-k {$a->capability} gaitasuna {$a->context} testuinguruan?';
$string['xuserswiththerole'] = '\"{$a->role}\" rola duten erabiltzaileak';
$string['explainpermissions'] = 'Baimenak zabaldu'; // ORPHANED
$string['question:export'] = 'Galderak esportatu'; // ORPHANED
$string['question:import'] = 'Galderak inportatu'; // ORPHANED
$string['question:manage'] = 'Galderak kudeatu'; // ORPHANED

?>
