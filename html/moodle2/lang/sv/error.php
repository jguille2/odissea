<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'error', language 'sv', branch 'MOODLE_24_STABLE'
 *
 * @package   error
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alreadyloggedin'] = 'Du är redan inloggad som {$a} så Du måste logga ut innan Du kan logga in som en annan användare.';
$string['blockcannotconfig'] = 'Det här blocket stöder inte global konfiguration';
$string['blockcannotinistantiate'] = 'Svårigheter med att instantiera objekt av typ block';
$string['blockcannotread'] = 'Det gick inte att läsa data för blockid={$a}';
$string['blockdoesnotexist'] = 'Det finns inget sådant här block';
$string['blockdoesnotexistonpage'] = 'Det här blocket (id={$a->instanceid}) finns inte på den här sidan ({$a->url}).';
$string['blocknameconflict'] = 'Namnkonflikt: blocket {$a->name} har samma titel som ett befintligt block: {$a->conflict}!';
$string['cannotaddcoursemodule'] = 'Det gick inte att lägga till en ny kursmodul';
$string['cannotaddcoursemoduletosection'] = 'Det gick inte att lägga till den nya kursen till den sektionen.';
$string['cannotaddmodule'] = '{$a} modulen kunde inte läggas till modullistan!';
$string['cannotaddnewmodule'] = 'Det gick inte att lägga till en ny modul {$a}';
$string['cannotaddrss'] = 'Du har inte behörighet att lägga till RSS-flöden';
$string['cannotaddthisblocktype'] = 'Du kan inte lägga till ett {$a} block till den här sidan.';
$string['cannotassignrole'] = 'Det går inte att tilldela en roll i kurs';
$string['cannotassignrolehere'] = 'Du får inte tilldela den här rollen (id = {$a->roleid}) i det här sammanhanget ({$a->context})';
$string['cannotassignselfasparent'] = 'Det går inte att tilldela "self" som förälder!';
$string['cannotcallscript'] = 'Du kan inte anropa det här skriptet på det här sättet.';
$string['cannotcallusgetselecteduser'] = 'Du kan inte anropa user_selector::get_selected_user om multi select är "true".';
$string['cannotcreatebackupdir'] = 'Kunde inte skapa mapp för säkerhetskopior. Administratören måste konfigurera filbehörigheterna.';
$string['cannotcreatecategory'] = 'Kategorin fogades inte in';
$string['cannotcreategroup'] = 'Fel vid skapande av grupp';
$string['cannotcreatelangdir'] = 'Det går inte att skapa en lang-katalog';
$string['cannotcreateorfindstructs'] = 'Fel i sb m sökning eller skapande av sektionsstrukturer för den här kursen';
$string['cannotcreatepopupwin'] = 'Odefinierad element - kan inte skapa pop-up fönster';
$string['cannotcreatesitedir'] = 'Kan inte skapa webbplats-mapp. En administratör kan ändra filrättigheterna.';
$string['cannotcreatetempdir'] = 'Det går inte att skapa en temp-katalog';
$string['cannotcreateuploaddir'] = 'Kan inte skapa mapp. En administratör kan ändra filrättigheterna.';
$string['cannotcustomisefiltersblockuser'] = 'Du kan inte standardisera inställningar för filter i sammanhangen för användare eller block';
$string['cannotdeletebackupids'] = 'Kunde inte raderas tidigare backuppers id.';
$string['cannotdeletecategorycourse'] = 'Det gick inte att ta bort kursen {$a}.';
$string['cannotdeletecategoryquestions'] = 'Det gick inte att ta bort frågor från kategorin {$a}.';
$string['cannotdeletecourse'] = 'Du har inte tillstånd att ta bort den här kursen. ';
$string['cannotdeletecustomfield'] = 'Fel i sb m borttagande av standardiserade fältdata';
$string['cannotdeletedir'] = 'Kan inte ta bort ({$a})';
$string['cannotdeletefile'] = 'Det går inte att ta bort den här filen';
$string['cannotdeleterole'] = 'It cannot be deleted, because {$a}';
$string['cannotdeleterolewithid'] = 'Det gick inte att ta bort rollen med ID {$a}';
$string['cannotdeletethisrole'] = 'Du kan inte ta bort den här rollen eftersom den används av systemet eller så är det den sista rollen med kapaciteter för en administratör.';
$string['cannotdisableformat'] = 'Du kan inte inaktivera standardformatet';
$string['cannotdownloadcomponents'] = 'Det går inte att ladda ner komponenter';
$string['cannotdownloadlanguageupdatelist'] = 'Det går inte att ladda ner en lista över uppdateringar av språk från moodle.org';
$string['cannotdownloadzipfile'] = 'Det går inte att ladda ner ZIP-fil.';
$string['cannoteditcomment'] = 'Denna kommentar är inte din egen och du kan inte redigera den!';
$string['cannoteditcommentexpired'] = 'Du kan inte redigera detta, tidgränsen har löpt ut.';
$string['cannoteditpostorblog'] = 'Du kan inte posta eller redigera bloggar';
$string['cannoteditsiteform'] = 'Du kan inte redigera kursen på webbplatsnivå med hjälp av det här formuläret';
$string['cannotedityourprofile'] = 'Du kan tyvärr inte redigera Din egen profil.';
$string['cannotfindcategory'] = 'Det går inte att hitta kategoripost från databasen genom ID - {$a}';
$string['cannotfindcomponent'] = 'Det går inte att hitta komponent';
$string['cannotfindcontext'] = 'Det gick inte att hitta kontext';
$string['cannotfindcourse'] = 'Det går inte att hitta kurs';
$string['cannotfindgradeitem'] = 'Det går inte att hitta grade-item';
$string['cannotfindgroup'] = 'Kunde inte hitta gruppen';
$string['cannotfindinfo'] = 'Kan inte hitta information för: "{$a}"';
$string['cannotfindlang'] = 'Kan inte hitta &quot;{$a}&quot; språkpaketet!';
$string['cannotfindteacher'] = 'Det går inte att hitta (distans)lärare';
$string['cannotfinduser'] = 'Det går inte att hitta någon användare vid namn "{$a}"';
$string['cannotgeoplugin'] = 'Kan inte ansluta till geoPlugin server på http://www.geoplugin.com, kontrollera proxyinställningarna eller ännu bättre installera MaxMind GeoLite City datafilen';
$string['cannotgetblock'] = 'Kund inte hämta block från databasen';
$string['cannotgetdata'] = 'Kan inte få information';
$string['cannotgradeuser'] = 'Det går inte att sätta betyg på den här användaren';
$string['cannothaveparentcate'] = 'En kurskategori kan inte ha "förälder"!';
$string['cannotimport'] = 'Fel vid import';
$string['cannotimportformat'] = 'Funktionen att importera det här formatet är tyvärr ännu inte implementerad!';
$string['cannotimportgrade'] = 'Fel vid import av betyg/omdöme';
$string['cannotinsertgrade'] = 'Det går inte att foga in en betygskomponent utan kursID!';
$string['cannotinsertrecord'] = 'Det gick inte att infoga ny post-ID {$a}';
$string['cannotmailconfirm'] = 'Fel i sb m att e-post om bekräftelse av ändring av lösenord skickades ut';
$string['cannotmanualctrack'] = 'Den här aktiviteten erbjuder inte manuell spårning av fullföljande';
$string['cannotmapfield'] = 'En kollision vid kartläggning har upptäckts - två fält leder till samma betygskomponent {$a}';
$string['cannotmoverolewithid'] = 'Det går inte att flytta rollen med ID {$a}';
$string['cannotopencsv'] = 'Det går inte att öppna CSV-filen';
$string['cannotopenfile'] = 'Det går inte att öppna filen ({$a})';
$string['cannotopenforwrit'] = 'Kan inte öppna för skrivning: {$a}';
$string['cannotopentemplate'] = 'Kan inte öppna mallfil ({$a})';
$string['cannotopenzip'] = 'Det går inte att öppna zip-filen, förmodligen är det en zip-tilläggsbugg på 64bit os';
$string['cannotoverridebaserole'] = 'Det går inte att överskrida de grundläggande rollkapaciteterna';
$string['cannotoverriderolehere'] = 'Du har inte tillstånd att överskrida den här rollen (id = {$a->roleid}) i det här sammanhanget ({$a->context})';
$string['cannotreadfile'] = 'Det går inte att läsa filen {$a}';
$string['cannotreadtmpfile'] = 'Fel vid läsning av en temporär fil';
$string['cannotreaduploadfile'] = 'Det gick inte att läsa den uppladdade filen';
$string['cannotremovefrommeta'] = 'Kunde inte ta bort den valda kursen från den här metakursen!';
$string['cannotresetguestpwd'] = 'Du kan inte återställa lösenordet för gäster';
$string['cannotresetmail'] = 'Fel i sb m återställande av lösenord och e-post till Dig';
$string['cannotresetthisrole'] = 'Kan inte återställa denna roll';
$string['cannotrestore'] = 'Ett fel har uppstått och det gick inte att fullfölja återställningen';
$string['cannotrestoreadminorcreator'] = 'Du behöver vara administratör för att återställa till ny kurs!';
$string['cannotrestoreadminoredit'] = 'Du behöver ha rättigheter eller vara administratör för att återställ till vald kurs!';
$string['cannotsaveagreement'] = 'Kunde inte spara ditt medgivande';
$string['cannotsaveblock'] = 'Fel uppstod då blockkonfigurationen skulle sparas';
$string['cannotsavecomment'] = 'Kan inte spara kommentar';
$string['cannotsavedata'] = 'Det går inte att spara data';
$string['cannotsavefile'] = 'Det går inte att spara filen "{$a}"!';
$string['cannotsavemd5file'] = 'Det går inte att spara md5-fil';
$string['cannotsavezipfile'] = 'Det går inte att spara ZIP-fil';
$string['cannotsetparentforcatoritem'] = 'Det går inte att ställa in "förälder" för kategori eller kurskomponent!';
$string['cannotsetpassword'] = 'Det gick inte att ställa in lösenord för användare!';
$string['cannotsettheme'] = 'Det gick inte att ställa in temat!';
$string['cannotsetupblock'] = 'Blocktabellerna kunde inte konfigureras framgångsrikt!';
$string['cannotshowhidecoursesincategory'] = 'Det går inte att visa/dölja kurser i kategori {$a}.';
$string['cannotunassigncap'] = 'Det gick inte att ta bort tilldelningen av en utgången kapacitet {$a->cap} från rollen {$a->role}';
$string['cannotunzipfile'] = 'Det går inte att packa upp fil';
$string['cannotupdatemod'] = 'Det gick inte att uppdatera {$a}';
$string['cannotupdatepasswordonextauth'] = 'Uppdateringen av lösenordet på den externa autentiseringen misslyckades: {$a}. Kontrollera serverloggarna för mer detaljer.';
$string['cannotupdateprofile'] = 'Fel vid uppdatering av post för användare';
$string['cannotupdaterss'] = 'Kan inte uppdatera RSS';
$string['cannotupdatesubcourse'] = 'Kunde inte uppdatera en barnkurs!';
$string['cannotupdateuseronexauth'] = 'Uppdateringen av användardata på den externa autentiseringen {$a} misslyckades. Se serverloggarna för mer detaljer.';
$string['cannotuploadfile'] = 'Fel när den uppladdade filen skulle behandlas';
$string['cannotuseadmin'] = 'Du måste vara en administratör för att använda den här sidan';
$string['cannotuseadminadminorteacher'] = 'Du måste vara en lärare eller administratör för att använda den här sidan';
$string['cannotusepage'] = 'Endast lärare och administratörer kan använda den här sidan';
$string['cannotusepage2'] = 'Du får tyvärr inte använda den här sidan';
$string['cannotviewprofile'] = 'Du kan inte visa den här användarens profil.';
$string['cannotviewreport'] = 'Du kan inte visa den här rapporten';
$string['cannotwritefile'] = 'Kan inte skriva till filen ({$a})';
$string['categoryerror'] = 'Kategorifel';
$string['categorytoolong'] = 'Kategorinamnet är för långt';
$string['commentmisconf'] = 'Kommentar ID är felkonfigurerad';
$string['componentisuptodate'] = 'Komponenten är av en aktuell version';
$string['confirmsesskeybad'] = 'Beklagar, men det gick inte att bekräfta Din nyckel för sessionen vilket är nödvändigt för att fullfölja den här handlingen. Det här är en säkerhetsåtgärd för att förebygga att viktiga funktioner utförs på felaktiga eller illasinnade sätt i Ditt namn. Var snäll och kontrollera noga att Du verkligen vill fullfölja detta.';
$string['couldnotassignrole'] = 'Ett allvarligt men odefinierat fel inträffade när en roll skulle tilldelas till Dig.';
$string['couldnotupdatenoexistinguser'] = 'Kan inte uppdatera användaren - användaren finns inte';
$string['countriesphpempty'] = 'Fel: Filen countries.php i språkpaketet {$a} är tom eller saknas.';
$string['coursedoesnotbelongtocategory'] = 'Kursen tillhör inte den här kategorin';
$string['courseformatnotfound'] = 'Kursformatet \'{$a}\' finns inte eller känns inte igen';
$string['coursegroupunknown'] = 'Den kurs som hör till grupp {$a} har inte angivits';
$string['courseidnotfound'] = 'Det finns inget sådant kursID ';
$string['coursemisconf'] = 'Kursen är konfigurerad på fel sätt';
$string['courserequestdisabled'] = 'Ledsen, men kursförfrågningar har inaktiverats av administratören';
$string['csvcolumnduplicates'] = 'Vi har upptäckt dubbletter av kolumner';
$string['csvemptyfile'] = 'CSV-filen är tom';
$string['csvfewcolumns'] = 'Det finns inte tillräckligt med kolumner, var snäll och verifiera inställningen för begränsningar.';
$string['csvinvalidcolsnum'] = 'Ogiltig CSV-fil - varje rad måste innehålla 49 eller 70 fält';
$string['csvloaderror'] = 'Fel uppstod vid laddning av CSV-fil!';
$string['csvweirdcolumns'] = 'Ogiltigt format för CSV-fil - antalet kolumner är inte konstant.';
$string['dbconnectionfailed'] = '<p> Fel: Databas anslutningen misslyckades </p><p> Det är möjligt att databasen är överbelastad eller på annat sätt inte fungerar ordentligt. </p><p> Administratören bör också kontrollera att databasenuppgifterna har angetts korrekt i config.php </p>';
$string['dbsessionbroken'] = 'Ett allvarligt databassessionproblem har upptäckts. <br /><br /> Vänligen meddela serveradministratören.';
$string['dbsessionhandlerproblem'] = 'Inrättande av databassession misslyckades. <br /><br /> Vänligen meddela serveradministratören.';
$string['dbupdatefailed'] = 'Uppdatering av databasen misslyckades';
$string['ddldependencyerror'] = '{$a->targettype} "{$a->targetname}" kan inte ändras. Beroende hittades med {$a->offendingtype} "{$a->offendingname}"';
$string['ddlexecuteerror'] = 'DDL sql exekveringsfel';
$string['ddlfieldalreadyexists'] = 'Fältet "{$a}" finns redan';
$string['ddlfieldnotexist'] = 'Fältet "{$a->fieldname}" finns inte i tabellen "{$a->tablename}"';
$string['ddltablealreadyexists'] = 'Tabellen "{$a}" finns redan';
$string['ddltablenotexist'] = 'Tabellen "{$a}" finns inte';
$string['ddlunknownerror'] = 'Okänt DDL bibliotek fel';
$string['ddlxmlfileerror'] = 'Det fanns fel i XML-databasfilen';
$string['detectedbrokenplugin'] = 'Plugin "{$a}" är defekt eller föråldrat, kan inte fortsätta, tyvärr.';
$string['dmlreadexception'] = 'Fel vid läsning av databas';
$string['dmltransactionexception'] = 'Fel vid överföring till databas';
$string['dmlwriteexception'] = 'Fel i sb m att data skulle skrivas till databas';
$string['downgradedcore'] = 'FEL! Koden som du använder är äldre än den version som skapade dessa databaser!';
$string['downloadedfilecheckfailed'] = 'Det gick inte att kontrollera den nedladdade filen';
$string['duplicatefieldname'] = 'Duplicerat fältnamn "{$a}" upptäcktes';
$string['duplicateparaminsql'] = 'FEL: duplicerat parameternamn i sökning';
$string['duplicaterolename'] = 'Det finns redan en roll med detta namn!';
$string['duplicateroleshortname'] = 'Det finns redan en roll med detta korta namn!';
$string['duplicateusername'] = 'Dubblerat användarnamn - hoppar över posten';
$string['emailfail'] = 'Misslyckades att skicka e-post';
$string['error'] = 'Det uppstod ett fel';
$string['errorcleaningdirectory'] = 'Fel i samband med rensning av katalogen "{$a}"';
$string['errorcopyingfiles'] = 'Fel i samband med kopiering av filer';
$string['errorcreatingdirectory'] = 'Fel i samband med skapandet av katalogen  "{$a}"';
$string['errorcreatingfile'] = 'Fel i samband med skapandet av filen  "{$a}"';
$string['errorcreatingrole'] = 'Fel vid skapande av roll';
$string['errorfetchingrssfeed'] = 'Det uppstod ett fel i sb m hämtning av RSS-inflöde';
$string['erroronline'] = 'Fel på rad {$a}';
$string['errorparsingxml'] = 'Fel vid tolkning XML: {$a->errorstring} på rad {$a->errorline}, tecken {$a->errorchar}';
$string['errorreadingfile'] = 'Fel i samband med läsningen av filen  "{$a}"';
$string['errorsavingrequest'] = 'Ett fel uppstod vid försök att spara din begäran.';
$string['errorsettinguserpref'] = 'Ett fel uppstod då användarinställningar skulle sparas.';
$string['errorunzippingfiles'] = 'Fel i samband med att filer skulle packas upp';
$string['expiredkey'] = 'Utgången nyckel';
$string['fieldrequired'] = '\'{$a}\' är ett obligatoriskt fält';
$string['fileexists'] = 'Det finns en sådan fil';
$string['filenotfound'] = 'Den efterfrågade filen kan tyvärr inte skapas';
$string['filenotreadable'] = 'Det går inte att läsa filen';
$string['filterdoesnothavelocalconfig'] = 'Filtret {$a} kan inte konfigureras lokalt.';
$string['filternotactive'] = 'Filtret {$a} är inte aktiverat.';
$string['filternotenabled'] = 'Filter är inte aktiverat!';
$string['filternotinstalled'] = 'Filtret {$a} är inte installerat.';
$string['forumblockingtoomanyposts'] = 'Du har överskridit det maximalt tillåtna antalet inlägg som gäller för det här forumet.';
$string['generalexceptionmessage'] = 'Undantag - {$a}';
$string['gradepubdisable'] = 'Publicering av betyg är avaktiverat.';
$string['groupalready'] = 'Användaren tillhör redan grupp {$a}';
$string['groupexistforcourse'] = 'Det finns redan en grupp "{$a}" i den här kursen.';
$string['groupinghasidnumber'] = 'Gruppering &quot;{$a}&quot; har ett idnumber och kan ha skapas automatiskt av ett externt system. Du har inte behörighet att ta bort denna gruppering.';
$string['groupnotaddederror'] = 'Grupp "{$a}" har inte lagts till';
$string['groupunknown'] = 'Grupp {$a} är inte kopplad till den angivna kursen';
$string['groupusernotmember'] = 'Användaren är inte meddlem av denna grupp.';
$string['guestnocomment'] = 'Gäster kan inte skriva inlägg!';
$string['guestnoeditprofile'] = 'Gästanvändare kan inte redigera sin profil';
$string['guestnoeditprofileother'] = 'Gästanvändarens profil går inte att redigera';
$string['guestnorate'] = 'Gäster kan inte betygsätta.';
$string['guestsarenotallowed'] = 'Gästanvändare kan inte göra detta';
$string['hackdetected'] = 'Intrångsförsök upptäckta!';
$string['idnumbertaken'] = 'ID-nummer används redan för en annan kurs';
$string['idnumbertoolong'] = 'ID-numret är för långt';
$string['importformatnotimplement'] = 'Tyvärr, import av detta format ännu inte implementerat!';
$string['incorrectext'] = 'Fil(-er) med fel filextension.';
$string['invalidactivityid'] = 'Ogiltig aktivitets-ID';
$string['invalidadminsettingname'] = 'Ogiltig administratörsinställning ({$a})';
$string['invalidargorconf'] = 'Det gavs inga giltiga argument eller det handlar om felaktig serverkonfiguration.';
$string['invalidarguments'] = 'Det gavs inga giltiga argument';
$string['invalidblockinstance'] = 'Ogiltig blockinstans: {$a}';
$string['invalidbulkenrolop'] = 'Ogiltig bulkregistreringsoperation har begärts.';
$string['invalidcategory'] = 'Felaktig kategori!';
$string['invalidcategoryid'] = 'Felaktig ID för kategori!';
$string['invalidcomment'] = 'Felaktig kommentar';
$string['invalidcommentarea'] = 'Ogiltig kommentarruta';
$string['invalidcommentid'] = 'Ogiltigt kommentar-id';
$string['invalidcommentparam'] = 'Ogiltiga kommentarparametrar';
$string['invalidcomponent'] = 'Ogiltigt komponentnamn';
$string['invalidconfirmdata'] = 'Felaktiga data för bekräftelse';
$string['invalidcontext'] = 'Ogiltigt sammanhang';
$string['invalidcourse'] = 'Ogiltig kurs';
$string['invalidcourseid'] = 'Du försöker använda en ogiltig kurs-ID';
$string['invalidcourselevel'] = 'Felaktig nivå på sammanhang';
$string['invalidcoursemodule'] = 'Ogiltig ID för kursmodul';
$string['invalidcoursenameshort'] = 'Ogiltigt kortnamn för kurs';
$string['invaliddata'] = 'De data som har skickats in är ogiltiga';
$string['invaliddatarootpermissions'] = 'Ogiltiga behörigheter har upptäcks i $CFG->dataroot katalogen, be administratören att åtgärda detta.';
$string['invaliddevicetype'] = 'Ogiltig enhetstyp';
$string['invalidelementid'] = 'Felaktigt ID för "element"!';
$string['invalidentry'] = 'Detta är inte ett giltig inmatning!';
$string['invalidevent'] = 'Ogiltig händelse';
$string['invalidfieldname'] = '\'{$a}\' är inte ett giltigt fältnamn';
$string['invalidfiletype'] = '\'{$a}\' är inte en giltig filtyp';
$string['invalidformatpara'] = 'Felaktigt format för välj parameter';
$string['invalidformdata'] = 'Felaktiga data i formulär';
$string['invalidfunction'] = 'Felaktig funktion';
$string['invalidgradeitemid'] = 'Felaktig id för betygs"element"';
$string['invalidgroupid'] = 'Ett felaktig gruppID har angivits';
$string['invalidipformat'] = 'Ogiltigt format för IP-adress';
$string['invaliditemid'] = 'Felaktigt ID för komponent "item"';
$string['invalidkey'] = 'Felaktig nyckel';
$string['invalidmd5'] = 'Kontrollvariabeln var felaktig - försök igen';
$string['invalidmode'] = 'Ogiltigt läge ({$a})';
$string['invalidmodule'] = 'Ogiltig modul';
$string['invalidmoduleid'] = 'Ogiltigt modul-ID: {$a}';
$string['invalidmodulename'] = 'Ogiltigt modulnamn: {$a}';
$string['invalidnum'] = 'Ogiltigt numeriskt värde';
$string['invalidoutcome'] = 'Felaktig ID för resultat';
$string['invalidpagesize'] = 'Ogiltig storlek för sida';
$string['invalidpasswordpolicy'] = 'Ogiltig policy för lösenord';
$string['invalidpaymentmethod'] = 'Ogiltig betalningsmetod: {$a}';
$string['invalidqueryparam'] = 'FEL: Felaktigt antal frågeparametrar. Förväntad {$a->expected} fick {$a->actual}.';
$string['invalidratingarea'] = 'Ogiltig betygsområde';
$string['invalidrecord'] = 'Kan inte hitta datapost i databastabell {$a}.';
$string['invalidrecordunknown'] = 'Kan inte hitta datapost i databasen.';
$string['invalidrequest'] = 'Ogiltig förfågan';
$string['invalidrole'] = 'Ogiltig roll';
$string['invalidroleid'] = 'Ogiltig ID för roll';
$string['invalidscaleid'] = 'Ogiltig ID för skala';
$string['invalidshortname'] = 'Detta är ett ogiltigt kortnamn för kurs';
$string['invalidsourcefield'] = 'Utkastfilens källa är ogiltigt';
$string['invalidstatedetected'] = 'Något har gått fel: {$a}. Detta bör aldrig normalt inträffa.';
$string['invalidurl'] = 'Ogiltig url';
$string['invaliduser'] = 'Ogiltig användare';
$string['invaliduserfield'] = 'Ogiltig användarfält: {$a}';
$string['invaliduserid'] = 'Ogiltigt ID för användare';
$string['invalidxmlfile'] = '\'{$a}\' är inte en giltig XML-fil';
$string['iplookupfailed'] = 'Det går inte att hitta någon information om den här IP-adressen {$a}.';
$string['iplookupprivate'] = 'Det går inte att visa sökning av privat IP-adress.';
$string['ipmismatch'] = 'Klientens IP-adress stämmer ej';
$string['listcantmovedown'] = 'Det gick inte att flytta ner komponenten, den är den sista av sina jämlikar på samma nivå.';
$string['listcantmoveleft'] = 'Det gick inte att flytta komponenten åt vänster, den har ingen förälder.';
$string['listcantmoveright'] = 'Det gick inte att flytta ner komponenten åt höger, det finns ingen jämlike på samma nivå att göra om till ett barn. Flytta det nedanför en annan jämlik på samma nivå - sedan kan du flytta den åt höger.';
$string['listcantmoveup'] = 'Det gick inte att flytta upp komponenten, den är den första av sina jämlikar på samma nivå.';
$string['listnochildren'] = 'Det gick inte att hitta några barn till komponenten';
$string['listnoitem'] = 'Det gick inte att hitta komponenten';
$string['listnopeers'] = 'Det gick inte att hitta några jämikar på samma nivå till komponenten';
$string['listupdatefail'] = 'DB-operationen misslyckades när listans hierarki skulle redigeras.';
$string['logfilenotavailable'] = 'Loggar ej tillgängliga';
$string['loginasnoenrol'] = 'Du kan inte använda \'registrera\' eller \'avregistrera\' när Du är i en session för \'logga in som\' för kurs.';
$string['loginasonecourse'] = 'Du har inte tillträde till den här kursen.<br/ > Du måste avsluta sessionen \'Logga in som\' innan Du kan få tillträde till någon annan kurs.';
$string['maxareabytes'] = 'Inte tillräckligt med utrymme för att lagra den här filen';
$string['maxbytes'] = 'Denna fil är större än den maximala storleken';
$string['messagingdisable'] = 'Meddelanden har inaktiverats på den här webbplatsen';
$string['missingfield'] = 'Fältet "{$a}" saknas';
$string['missingkeyinsql'] = 'FEL: parameter "{$a}" saknas i frågan';
$string['missing_moodle_backup_xml_file'] = 'Säkerhetskopian saknar XML-fil: {$a}';
$string['missingparam'] = 'En obligatorisk parameter ({$a}) saknades';
$string['missingparameter'] = 'Parameter saknas';
$string['missingrequiredfield'] = 'Det saknas några obligatoriska fält';
$string['missingvarname'] = 'Obligatorisk variabelnamn saknas!';
$string['mixedtypesqlparam'] = 'FEL: Blandade typer av SQL frågeparametrar!';
$string['mnetdisable'] = 'MNET är inaktiverat';
$string['mnetlocal'] = 'Fjärr MNET-användare kan inte logga in lokalt';
$string['moduledisable'] = 'Denna modul ({$a}) har inaktiverats för den aktuella kursen';
$string['moduledoesnotexist'] = 'Denna modul finns inte';
$string['modulemissingcode'] = 'Modulen {$a} saknar den kod som behövs för den här  funktionen.';
$string['multiplerecordsfound'] = 'Flera poster hittades, endast en post förväntades.';
$string['mustbeloggedin'] = 'Du måste vara inloggad för att göra detta';
$string['mustbeteacher'] = 'Du måste vara (distans)lärare för få tillgång till den här sidan.';
$string['myisamproblem'] = 'Databastabellerna använder MyISAM databasmotorn, det är rekommenderat att använda en ACID-kompatibel databasmotor med fullt transaktionsstöd som InnoDB.';
$string['needcopy'] = 'Du måste kopiera något först!';
$string['needcoursecategroyid'] = 'Antingen kurs-id eller kategori måste anges';
$string['needphpext'] = 'Du måste lägga till {$a} stöd till din PHP-installation';
$string['noadmins'] = 'Inga administratörer!';
$string['noblocks'] = 'Inga block hittas!';
$string['nocapabilitytousethisservice'] = 'Användaren har inte den nödvändiga förmågan att använda den här tjänsten';
$string['nocategorydelete'] = 'Kategorin \'{$a}\' kan inte tas bort!';
$string['nocontext'] = 'Den där kursen är tyvärr inte ett giltigt sammanhang.';
$string['nodata'] = 'Inga data';
$string['noexistingcategory'] = 'Ingen befintlig kategori';
$string['nofile'] = 'Filen är inte specificerat';
$string['nofiltersenabled'] = 'Inga filter är aktiverade.';
$string['nofolder'] = 'Begärd katalog finns inte';
$string['noguest'] = 'Inga gäster här!';
$string['noinstances'] = 'Det finns inga instanser av {$a} i den här kursen!';
$string['nologinas'] = 'Du har inte tillstånd att logga in som den användaren.';
$string['nonmeaningfulcontent'] = 'Inget meningsfullt innehåll';
$string['noparticipants'] = 'Inga deltagare hittades för denna kurs';
$string['noparticipatorycms'] = 'Du har tyvärr inga deltagande kursmoduler att rapportera om.';
$string['nopermissions'] = 'Du har tyvärr f.n. inte tillstånd att göra detta ({$a})';
$string['nopermissiontocomment'] = 'Du kan inte lägga till kommentarer';
$string['nopermissiontodelentry'] = 'Du kan inte radera andras inlägg!';
$string['nopermissiontoeditcomment'] = 'Du kan inte redigera andras kommentarer!';
$string['nopermissiontohide'] = 'Ingen behörighet att dölja!';
$string['nopermissiontoimportact'] = 'Du har inte behörighet att importera aktiviteter till kursen';
$string['nopermissiontolock'] = 'Ingen behörighet att låsa!';
$string['nopermissiontomanagegroup'] = 'Du har inte behörighet att hantera grupper';
$string['nopermissiontoshow'] = 'Ingen behörighet att se detta!';
$string['nopermissiontounlock'] = 'Ingen behörighet för att låsa upp!';
$string['nopermissiontoupdatecalendar'] = 'Ledsen, men du har för närvarande inte behörighet att uppdatera kalenderhändelse';
$string['nopermissiontoviewgrades'] = 'Det går inte att visa betyg.';
$string['nositeid'] = 'Ingen plats-ID';
$string['nostatstodisplay'] = 'Tyvärr, det finns inga tillgängliga data att visa';
$string['notavailable'] = 'Detta är inte tillgängligt f.n.';
$string['notlocalisederrormessage'] = '{$a}';
$string['notmemberofgroup'] = 'Du är inte medlem i denna kursgrupp';
$string['notownerofkey'] = 'Du är inte ägare till denna nyckel';
$string['nousers'] = 'Ingen sådan användare!';
$string['onlyadmins'] = 'Det är bara administratörer som kan göra detta.';
$string['onlyeditingteachers'] = 'Det är bara lärare som kan göra det.';
$string['onlyeditown'] = 'Du kan bara redigera Din egen information.';
$string['orderidnotfound'] = 'Ordernummer {$a} hittades inte';
$string['pagenotexist'] = 'Ett ovanligt fel inträffade (ett försök att nå en sida som inte finns).';
$string['pleasereport'] = 'Om Du har tid, var då snäll och låt oss få veta när felet uppträdde.';
$string['pluginrequirementsnotmet'] = 'Det gick inte att installera "{$a->pluginname}" ({$a->pluginversion}). Den kräver en nyare version av Moodle. Du använder f.n. {$a->currentmoodle} och Du behöver {$a->requiremoodle} .';
$string['processingstops'] = 'Processandet upphör här.  De återstående posterna har inte ändrats.';
$string['refoundto'] = 'Kan återbetalas till {$a}';
$string['refoundtoorigi'] = 'Återbetalas till ursprungligt belopp: {$a}';
$string['remotedownloaderror'] = 'Nedladdningen av en komponent till din server misslyckades, var snäll och verifiera inställningar för proxy. <br /><br />Du måste ladda ner <a href="{$a->url}">{$a->url}</a> filen manuellt, kopiera den till "{$a->dest}" på din server och packa upp den där.';
$string['remotedownloadnotallowed'] = 'De är inte tillåtet att ladda upp komponenter till Din server (allow_url_fopen är avaktiverad). Du måste ladda ner filen <a href="{$a->url}">{$a->url}</a> manuellt, kopiera den till "{$a->dest}" på Din server och packa upp den där.';
$string['requirecorrectaccess'] = 'Ogiltig webbadress eller port.';
$string['requireloginerror'] = 'Kurs eller aktivitet inte tillgänglig.';
$string['restricteduser'] = 'Ditt nuvarande konto "{$a}" tillåter tyvärr inte detta.';
$string['rpcerror'] = 'Din MNET kommunikation har misslyckats! Här är det ett felmeddelande att föra vidare till administratören: {$a}';
$string['scheduledbackupsdisabled'] = 'Schemalagda säkerhetskopieringar har avaktiverats av den administrerar servern,';
$string['sectionnotexist'] = 'Detta avsnitt finns inte';
$string['sendmessage'] = 'Skicka meddelande';
$string['serverconnection'] = 'Fel vid anslutning till servern';
$string['servicedonotexist'] = 'Tjänsten finns inte';
$string['sessionerroruser'] = 'Tiden för Din session har tagit slut eller stötte på ett fel. Var snäll och logga in igen.';
$string['sessionerroruser2'] = 'Ett fel på servernivå som påverkar Din session för inloggning har upptäckts. Var snäll och logga in igen och starta om Din webbläsare.';
$string['sessionipnomatch'] = 'Beklagar, men Ditt IP-nummer tycks ha ändrats sedan Du först loggade in. Det här är en säkerhetsåtgärd för att förebygga att \'crackers\' stjäl Din identitet medan Du är inloggad på den här webbplatsen. Vanliga användare bör inte få se detta meddelande - var snäll och be administratören för Din webbplats om hjälp.';
$string['socksnotsupported'] = 'SOCKS5 proxy stöds inte i PHP4';
$string['spellcheckernotconf'] = 'Stavningskontroll inte konfigurerad';
$string['sslonlyaccess'] = 'Av säkerhetsskäl endast HTTPS-anslutningar är tillåtna.';
$string['statscatchupmode'] = 'Statistiken håller f.n på att uppdateras. Hittills har {$a->daysdone} dagar behandlats och  {$a->dayspending} återstår att behandla. Du kan snart komma tillbaka och kontrollera detta igen!';
$string['statsdisable'] = 'Statistik är inte aktiverat';
$string['statsnodata'] = 'Det finns inga tillgängliga data för denna kombination av kurs och tidsperiod';
$string['storedfilecannotread'] = 'Kan inte läsa filen, antingen finns inte filen eller det finns finnsbehörighetsproblem';
$string['storedfilenotcreated'] = 'Kan inte skapa filen "{$a->contextid}/{$a->component}/{$a->filearea}/{$a->itemid}/{$a->filepath}/{$a->filename}"';
$string['tagdisabled'] = 'Taggar har inaktiveras!';
$string['tagnotfound'] = 'Den specificerade etiketten gick inte att hitta i databasen.';
$string['themenotinstall'] = 'Detta tema är inte installerat!';
$string['TODO'] = 'Att göra';
$string['tokengenerationfailed'] = 'Det går inte att skapa en ny token.';
$string['unenrolerror'] = 'Ett fel uppstod vid avregistrering sv personen';
$string['unicodeupgradeerror'] = 'Din databas är tyvärr ännu inte i Unicode och den här versionen av Moodle kan inte överföra Din databas till Unicode. Var snäll och uppgradera till Moodle 1.7.x först och genomför övergången till Unicode  via sidan för administration. Därefter bör Du kunna överföra databasen till Moodle {$a}.';
$string['unknowaction'] = 'Okänd åtgärd!';
$string['unknowcategory'] = 'Kategori inte känd!';
$string['unknowformat'] = 'Format inte känt ({$a})';
$string['unknowncontext'] = 'Detta är en okänd kontext.';
$string['unknowncourse'] = 'Okänd kurs som kallas "{$a}"';
$string['unknowncourseidnumber'] = 'Okänt kurs-id "{$a}"';
$string['unknownfiletype'] = 'Fel, okänd filtertyp';
$string['unknowngroup'] = 'Okänd grupp "{$a}"';
$string['unknownjsinrequirejs'] = 'Kan inte hitta JS bibliotek: {$a}';
$string['unknownrole'] = 'Okänd roll "{$a}"';
$string['unknownsortcolumn'] = 'Okänd sorteringskolumn {$a}';
$string['unknownuseraction'] = 'Jag förstår tyvärr inte denna handling från användarens sida.';
$string['unknowparamtype'] = 'Okänd parameter typ: {$a}';
$string['unknowquestiontype'] = 'Frågetyp {$a} stöds inte';
$string['unknowuploadaction'] = 'Fel: Okänt uppladdningsåtgärd ({$a})';
$string['unspecifycourseid'] = 'Du måste ange kursen id, kortnamn eller id-number';
$string['unsupportedevent'] = 'Händelsetyp stöds inte';
$string['unsupportedwebserver'] = 'Webbserver programvara ({$a}) stöds inte, tyvärr.';
$string['upgraderequires19'] = 'Fel: Ny Moodle version installerad på servern, uppgradering från den tidigare versionen stöds inte. <br /> Uppgradera först till senaste 1.9.x versionen. Du kan också gå tillbaka till tidigare version genom att installera originalfilerna.';
$string['upgraderunning'] = 'Webbplatsen uppgraderas, försök igen senare.';
$string['urlnotdefinerss'] = 'URL inte definierad för RSS-flöde';
$string['useradmineditadmin'] = 'Endast administratörer får modifiera andra administratörskonton';
$string['useradminodelete'] = 'Administratörskonton kan inte tas bort';
$string['userautherror'] = 'Okänd plugin för autenticering';
$string['userauthunsupported'] = 'Denna plugin för autenticering stödjs inte här.';
$string['useremailduplicate'] = 'Dublett av adress';
$string['usermustbemnet'] = 'Användare i MNET åtkomstlistan måste vara fjärr MNET-användare';
$string['usernotaddederror'] = 'Användaren har inte lagts till, detta p.g. a. ett okänt fel.';
$string['usernotaddedregistered'] = 'Användaren har inte lagts till eftersom denne/a redan är registrerad';
$string['usernotavailable'] = 'Detaljerna kring denne användare är inte tillgängliga för Dig.';
$string['usernotdeletedadmin'] = 'Användare inte raderad - kan inte ta bort administratörskonton';
$string['usernotdeletederror'] = 'Användaren togs inte bort - okänt fel';
$string['usernotdeletedmissing'] = 'Användaren togs inte bort - det gick inte att hitta användarnamnet.';
$string['usernotdeletedoff'] = 'Användaren har inte tagits bort - det är inte tillåtet att ta bort';
$string['usernotincourse'] = 'Denna användare finns inte i den här kursen!';
$string['usernotrenamedadmin'] = 'Det går inte att byta namn på ett konto för administratörer';
$string['usernotrenamedexists'] = 'Användarnamnet har inte ändrats eftersom det angivna namnet redan används.';
$string['usernotrenamedmissing'] = 'Användarnamnet har inte ändrats eftersom det inte gick att hitta det gamla namnet.';
$string['usernotrenamedoff'] = 'Användarens namn har inte bytts ut - det är inte tillåtet att ta byta namn.';
$string['usernotupdatedadmin'] = 'Det går inte att uppdatera ett konto för administratörer';
$string['usernotupdatederror'] = 'Användaren har inte uppdaterats - okänt fel';
$string['usernotupdatednotexists'] = 'Användare har inte uppdaterats - den finns inte';
$string['userquotalimit'] = 'Du har nått gränsen för din filkvot.';
$string['wrongcall'] = 'Detta skript anropas felaktigt';
$string['wrongcontextid'] = 'Kontext-ID var felaktig (kan inte hitta den)';
$string['wrongdestpath'] = 'Fel sökväg';
$string['wrongroleid'] = 'Felaktig roll-ID!';
$string['wrongsourcebase'] = 'Fel bas-URL till källan';
$string['wrongusernamepassword'] = 'Fel användarnamn/lösenord';
$string['wrongzipfilename'] = 'Fel namn på ZIP-filen';
$string['wscouldnotcreateecoursenopermission'] = 'WS - Kunde inte skapa kurs - Ingen behörighet';
$string['wwwrootmismatch'] = 'Felaktig åtkomst har upptäckts, denna server kan nås endast genom "{$a}" adressen.<br /> Vänligen meddela serveradministratören.';
$string['xmldberror'] = 'XMLDB fel!';
$string['youcannotdeletecategory'] = 'Du kan inte radera kategorin \'{$a}\' eftersom du kan varken radera innehållet eller flytta dem någon annanstans.';
