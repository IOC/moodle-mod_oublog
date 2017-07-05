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

$string['attachments'] = "Fitxers adjunts";
$string['oublog'] = 'Blog';
$string['modulename'] = 'Blog OU';
$string['modulenameplural'] = 'Blogs OU';
$string['modulename_help'] = 'El mòdul d\'activitat de blog permet la creació de blogs en un curs
 (són independents del sistema de blogs de Moodle). Podeu tenir blogs de curs (tots els participants
 del curs afegeixen entrades al mateix blog), blogs de grup, o blogs individuals.';

$string['oublogintro'] = 'Descripció';

$string['oublog:view'] = 'Veure entrades';
$string['oublog:addinstance'] = 'Afegir un nou blog';
$string['oublog:viewpersonal'] = 'Veure entrades dels blogs personals';
$string['oublog:viewprivate'] = 'Veure entrades privades dels blogs personals';
$string['oublog:contributepersonal'] = 'Publicar entrades i comentaris als blogs personals.';
$string['oublog:post'] = 'Publicar una nova entrada';
$string['oublog:comment'] = 'Afegir comentaris a les entrades';
$string['oublog:managecomments'] = 'Gestionar els comentaris';
$string['oublog:manageposts'] = 'Gestiomar les entrades';
$string['oublog:managelinks'] = 'Gestionar els enllaços';
$string['oublog:audit'] = 'Veure entrades eliminades i versions antigues';
$string['oublog:viewindividual'] = 'Veure blogs individuals';
$string['oublog:exportownpost'] = 'Exportar els blogs propis';
$string['oublog:exportpost'] = 'Exportar una entrada';
$string['oublog:exportposts'] = 'Exportar entrades';
$string['newpost'] = 'Nova entrada';
$string['removeblogs'] = 'Elimina totes les entrades del blog';
$string['title'] = 'Títol';
$string['message'] = 'Contingut de l\'entrada';
$string['tags'] = 'Etiquetes';
$string['tagsfield'] = 'Etiquetes (separades per comes)';
$string['allowcomments'] = 'Permet comentaris';
$string['allowcommentsmax'] = 'Permet comentaris (si es selecciona per a l\'entrada)';
$string['logincomments'] = 'Sí, d\'usuaris autenticats';
$string['permalink'] = 'Enllaç';
$string['publiccomments'] = 'Sí, de tothom (fins i tot d\'usuaris no autenticats)';
$string['publiccomments_info'] = 'Si algú afegeix un comentari sense estar autenticat, rebreu una
 notificació per correu i podreu acceptar-lo o rebutjar-lo. Això és necessari per evitar comentaris
 brossa';
$string['error_grouppubliccomments'] = 'No es permeten comentaris d\'usuaris no autenticats en blogs
 separats per grups.';
$string['nocomments'] = 'No';
$string['visibility'] = 'Qui pot veure el blog?';
$string['visibility_help'] = '
<p><strong>Participants del curs</string> &ndash; per veure les entrades és necessari tenir permís
 per accedir a l\'activitat, normalment els usuaris inscrits al curs tenen aquest permís.</p>
<p><strong>Tots els usuaris autenticats</strong> &ndash; tots els usuaris autenticats del poden
 veure l\'entrada, encara que no estiguin inscrits al curs.</p>
<p><strong>Tothom</strong> &ndash; qualsevol persona pot veure aquesta entrada si coneix l\'adreça.
</p>';
$string['maxvisibility'] = 'Visibilitat màxima';
$string['yes'] = 'Sí';
$string['no'] = 'No';
$string['blogname'] = 'Nom del blog';
$string['summary'] = 'Resum';
$string['statblockon'] = 'Mostra estadístiques d\'ús addicionals';
$string['oublogallpostslogin'] = 'Força l\'autenticació en totes les pàgines';

$string['globalusageexclude'] = 'Exclou de les estadístiques d\'ús globals';

$string['displayname_default'] = 'blog';
$string['displayname'] = 'Nom alternatiu de l\'activitat';
$string['displayname_help'] = 'Assigneu un nom alternatiu a l\'activitat per a mostrar a la interfície.

Si ho deixeu en blanc s\'utilitzarà el nom predeterminat ("blog").

La primera lletra hauria de ser minúscula, ja es mostrarà en majúscula quan sigui necessari.';

$string['visibleyou'] = 'Propietari del blog (privat)';
$string['visiblecourseusers'] = 'Participants del curs';
$string['visibleblogusers'] = 'Membres del blog';
$string['visibleloggedinusers'] = 'Tots els usuaris autenticats';
$string['visiblepublic'] = 'Tot el món';

$string['addpost'] = 'Publica l\'entrada';
$string['editpost'] = 'Edita l\'entrada';
$string['editsummary'] = 'Editat per {$a->editby}, {$a->editdate}';
$string['editonsummary'] = 'Editat {$a->editdate}';

$string['edit'] = 'Edita';
$string['delete'] = 'Elimina';

$string['olderposts'] = 'Entrades anteriors';
$string['newerposts'] = 'Entrades recents';
$string['extranavolderposts'] = 'Entrades més antigues: {$a->from}-{$a->to}';
$string['extranavtag'] = 'Filtre: {$a}';

$string['comments'] = 'Comentaris';
$string['ncomments'] = '{$a} comentaris';
$string['onecomment'] = '{$a} comentari';
$string['npending'] = '{$a} comentaris pendents d\'aprovació';
$string['onepending'] = '{$a} comentari pendent d\'aprovació';
$string['npendingafter'] = ', {$a} esperant l\'aprovació';
$string['onependingafter'] = ', {$a} esperant l\'aprovació';
$string['comment'] = 'Afegeix un comentari';
$string['lastcomment'] = '(últim comentari de {$a->fullname}, {$a->timeposted})';
$string['addcomment'] = 'Afegeix el comentari';

$string['confirmdeletepost'] = 'Segur que voleu eliminar aquesta entrada?';
$string['confirmdeletecomment'] = 'Segur que voleu eliminar aquest comentari?';
$string['confirmdeletelink'] = 'Segur que voleu eliminar aquest enllaç?';

$string['viewedit'] = 'Mostra l\'edició';
$string['views'] = 'Visites a aquest {$a}:';

$string['addlink'] = 'Afegeix un enllaç';
$string['editlink'] = 'Edita l\'enllaç';
$string['links'] = 'Enllaços relacionats';

$string['subscribefeed'] = 'Subscriviu-vos a un canal per rebre notificacions de les actualitzacions del {$a}.';
$string['feeds'] = 'Canals';
$string['blogfeed'] = 'Canal del {$a}';
$string['commentsfeed'] = 'Només els comentaris';
$string['atom'] = 'Atom';
$string['rss'] = 'RSS';
$string['atomfeed'] = 'Canal Atom';
$string['rssfeed'] = 'Canal RSS';

$string['newblogposts'] = 'Noves entrades al blog';

$string['blogsummary'] = 'Resum del blog';
$string['posts'] = 'Entrades';

$string['defaultpersonalblogname'] = '{$a->displayname} de {$a->name}';

$string['numposts'] = '{$a} entrades';

$string['noblogposts'] = 'No hi ha entrades al blog';

$string['blogoptions'] = 'Opcions del blog';

$string['postedby'] = 'per {$a}';
$string['postedbymoderated'] = 'per {$a->commenter} (aprovat per {$a->approver}, {$a->approvedate})';
$string['postedbymoderatedaudit'] = 'per {$a->commenter} [{$a->ip}] (aprovat per {$a->approver}, {$a->approvedate})';

$string['deletedby'] = 'Eliminat per {$a->fullname}, {$a->timedeleted}';

$string['newcomment'] = 'Nou comentari';

$string['searchthisblog'] = 'Cerca en aquest {$a}';
$string['searchblogs'] = 'Cerca';

$string['url']='Adreça web completa';

$string['bloginfo']='Informació del blog';

$string['feedhelp']='Canals';
$string['feedhelp_help']='Si utilitzeu un lector de canals de notícies podeu afegir aquests enllaços
 Atom o RSS per mantenir-vos al dia de les entrades. La majoria de lectors de canals de notícies
 són compatibles amb Atom i RSS. Si els comentaris estan habilitats, també hi ha canals per a
 &lsquo;Només comentaris&rsquo;.';
$string['filter'] = 'Filtre:';
$string['filter-tooltip'] = "Feu clic per eliminar l'etiqueta del filtre";

$string['completionpostsgroup']='Entrades requerides';
$string['completionposts']='L\'usuari ha de publicar entrades:';
$string['completioncommentsgroup']='Comentaris requerits';
$string['completioncomments']='L\'usuari ha d\'afegir comentaris:';

$string['maybehiddenposts']='Aquest {$a->name} pot contenir entrades que només poden veure o comentar
 els usuaris autenticats. Si teniu un compte en aquest lloc, <a href=\'{$a->link}\'>entreu per a
 tenir accés complet al blog</a>.';

$string['guestblog']='Si teniu un compte en aquest lloc, <a href=\'{$a->link}\'>entreu per a tenir
 accés complet al {$a->name}</a>.';
$string['noposts']='No hi ha entrdes visibles en aquest {$a}.';

$string['siteentries'] = 'Mostra les entrades del lloc';
$string['overviewnumentrylog1'] = 'entrada des de l\'última autenticació';
$string['overviewnumentrylog'] = 'entrades des de l\'última autenticació';
$string['overviewnumentryvw1'] = 'entrada des de l\'última visualització';
$string['overviewnumentryvw'] = 'entrades des de l\'última visualització';
$string['activityoverview'] = 'Teniu blogs que necessiten la vostra atenció';
$string['overviewnumunread'] = ' entrades no llegides';
$string['overviewnumunread1'] = ' entrada no llegida';
$string['overviewcommentsunread'] = '{$a} comentaris no llegits';
$string['overviewcommentsunread1'] = '{$a} comentari no llegit';
$string['overviewcommentsfavourite'] = '{$a} comentaris favorits';
$string['overviewcommentsfavourite1'] = '{$a} comentari favorit';

$string['individualblogs'] = 'Blogs individuals';
$string['no_blogtogetheroringroups'] = 'No (comú o per grups)';
$string['separateindividualblogs'] = 'Sí, separats';
$string['visibleindividualblogs'] = 'Sí, visibles';

$string['separateindividual'] = 'Blogs individuals separasts';
$string['visibleindividual'] = 'Blogs individuals visibles';
$string['individualvisible'] = 'Visible';
$string['viewallusers'] = 'Mostra tots els usuaris';
$string['viewallusersingroup'] = 'Mostra tots els usuaris del grup';

$string['re']='Re: {$a}';

$string['displayversion'] = 'Versió del blog OU: <strong>{$a}</strong>';

$string['pluginadministration'] = 'Administració del blog';

// User participation
$string['oublog:grade'] = 'Qualifica la participació dels usuaris';
$string['oublog:viewparticipation'] = 'Mostra la participació dels usuaris';
$string['userparticipation'] = 'Participació dels usuaris';
$string['myparticipation'] = 'Resum de la meva participació';
$string['savegrades'] = 'Desa les qualificacions';
$string['participation'] = 'Participació';
$string['participationbyuser'] = 'Participació per usuari';
$string['details'] = 'Detalls';
$string['foruser'] = ' per a {$a}';
$string['postsby'] = 'Entrades de {$a}';
$string['commentsby'] = 'Comentaris de {$a}';
$string['commentonby'] = 'Comentari sobre <u>{$a->title}</u> per <u>{$a->author}</u>';
$string['nouserposts'] = 'No s\'ha publicat cap entrada.';
$string['nousercomments'] = 'No s\'ha publicat cap comentari.';
$string['savegrades'] = 'Desa les qualificacions';
$string['gradesupdated'] = 'S\'han actualitzat les qualificacions';
$string['usergrade'] = 'Qualificació de l\'usuari';

// Participation download strings
$string['downloadas'] = 'Baixa les dades com a';
$string['postauthor'] = 'Autor de l\'entrada';
$string['postdate'] = 'Data de l\'entrada';
$string['posttime'] = 'Hora de l\'entrada';
$string['posttitle'] = 'Títol de l\'entrada';

// Export
$string['exportedpost'] = 'Entrada exportada';
$string['exportpostscomments'] = ' totes les entrades visibles';
$string['exportownpostscomments'] = ' les meves entrades';
$string['exportuntitledpost'] = 'Una entrada sense títol ';

$string['configmaxattachments'] = 'Nombre màxim predeterminat permès de fitxers adjunts per entrada.';
$string['configmaxbytes'] = 'Mida màxima predeterminada permsesa dels fitxers adjunts (sotmès als
 límits de curs i altres paràmetres locals).';
$string['maxattachmentsize'] = 'Mida màxim dels fitxers adjunts';
$string['maxattachments'] = 'Nombre màxim de fitxers adjunts';
$string['maxattachments_help'] = 'Aquest paràmetre especifica el nombre màxim de fitxers adjunts
 d\'una entrada.';
$string['maxattachmentsize_help'] = 'Aquest paràmetre especifica la mida màxima dels fitxers
 adjunts d\'una entrada.';
$string['attachments_help'] = 'Opcionalment podeu adjuntar un o més fitxers a una entrada. Si
 adjunteu una imatge, es mostrarà després de l\'entrada.';

$string['reportingemail'] = 'Adreça d\'alertes';
$string['reportingemail_help'] = 'Aquest paràmetre especifica l\'adreça de correu dels qui seran
 informats sobre les incidències d\'entrades o comentaris dels blogs. Han d\'introduir-se separades
 per comes.';
$string['postalert'] = 'Alerta sobre l\'entrada';
$string['commentalert'] = 'Alerta sobre el comentari';
$string['oublog_managealerts'] = 'Gestiona les alertes d\'entrades i comentaris';
$string['untitledpost'] = 'Entrada sense títol';
$string['untitledcomment'] = 'Comentari sense títol';

// Discovery block.
$string['discovery'] = 'Estadístiques d\'ús';
$string['timefilter_alltime'] = 'Qualsevol moment';
$string['timefilter_thismonth'] = 'L\'últim any';
$string['timefilter_thisyear'] = 'L\'últim mes';
$string['timefilter_label'] = 'Període';
$string['timefilter_submit'] = 'Refresca';
$string['timefilter_open'] = 'Mostra les opcions';
$string['timefilter_close'] = 'Amaga les opcions';
$string['visits'] = 'Més visitats';
$string['activeblogs'] = 'Actius';
$string['numberviews'] = 'Visites al {$a}';
$string['visits_info_alltime'] = '{$a}s més visitats';
$string['visits_info_active'] = '{$a}s actius (una entrada publicada durant l\'últim mes) més visitats';
$string['mostposts'] = 'Amb més entrades';
$string['numberposts'] = 'Entrades al {$a}';
$string['posts_info_alltime'] = '{$a}s amb més entrades publicades';
$string['posts_info_thisyear'] = '{$a}s amb més entrades publicades durant l\'últim any';
$string['posts_info_thismonth'] = '{$a}s amb més entrades publicades durant l\'últim mes';
$string['mostcomments'] = 'Amb més comentaris';
$string['numbercomments'] = 'Comentaris del {$a}';
$string['comments_info_alltime'] = '{$a}s amb més comentaris publicats';
$string['comments_info_thisyear'] = '{$a}s amb més comentaris publicats durant l\'últim any';
$string['comments_info_thismonth'] = '{$a}s amb més comentaris publicats durant l\'últim mes';
$string['commentposts'] = 'Entrades amb més comentaris';
$string['commentposts_info_alltime'] = 'Entrades amb més comentaris publicats';
$string['commentposts_info_thisyear'] = 'Entrades amb més comentaris publicats durant l\'últim any';
$string['commentposts_info_thismonth'] = 'Entrades amb més comentaris publicats durant l\'últim mes';

$string['emailcontenthtml'] = 'Això és una notificació per avisar-vos que la vostra entrada a
 {$a->activityname} amb els detalls següents ha estat eliminada per \'{$a->firstname}
 {$a->lastname}\':<br />
 <br />
 Títol: {$a->subject}<br />
 {$a->activityname}: {$a->blog}<br />
 Curs: {$a->course}<br />
 <br />
 <a href={$a->deleteurl} title="Mostra l\'entrada eliminada">Mostra l\'entrada eliminada</a>';
$string['deleteemailpostbutton'] = 'Elimina i notifica per correu';
$string['deleteandemail'] = 'Elimina i notifica per correu';
$string['emailmessage'] = 'Missatge';
$string['cancel'] = 'Cancel·la';
$string['deleteemailpostdescription'] = 'Seleccioneu eliminar l\'entrada o eliminar l\'entrada i enviar una notificacio personalitzada per correu.';
$string['copytoself'] = 'Envia una còpia a mi mateix';
$string['includepost'] = 'Inclou l\'entrada';
$string['deletedblogpost'] = 'Entrada sense títol.';
$string['emailerror'] = 'S\'ha produït un error en enviar el missatge de correu.';
$string['sendanddelete'] = 'Envia i elimina';
$string['extra_emails'] = 'Adreces de correu d\'altres destinataris';
$string['extra_emails_help'] = 'Introduïu una o més adreces separades per espais o punts i comes.';

// Import pages.
$string['allowimport'] = 'Activa la importació d\'entrades';
$string['import'] = 'Importa entrades';
$string['import_notallowed'] = 'La importació d\'entrades està desactivada per aquest {$a}.';
$string['import_step0_nonefound'] = 'No tenoi accés a cap activitat d\'on es puguin importar entrades.';
$string['import_step0_inst'] = 'Seleccioneu la activitat d\'on s\'importaran les entrades:';
$string['import_step0_numposts'] = '({$a} entrades)';
$string['import_step1_inst'] = 'Seleccioneu les entrades a importar:';
$string['import_step1_from'] = 'Importa de:';
$string['import_step1_table_title'] = 'Títol';
$string['import_step1_table_posted'] = 'Data de publiació';
$string['import_step1_table_tags'] = 'Etiquetes';
$string['import_step1_table_include'] = 'Inclou a l\'importació';
$string['import_step1_addtag'] = 'Afegeix un filtre per etiqueta - {$a}';
$string['import_step1_removetag'] = 'Suprimeix el filtre per etiqueta - {$a}';
$string['import_step1_include_label'] = 'Importa entrada - {$a}';
$string['import_step1_submit'] = 'Importa entrades';
$string['import_step1_all'] = 'Selecciona-ho tot';
$string['import_step1_none'] = 'No seleccionis res';
$string['import_step2_inst'] = 'Important entrades:';
$string['import_step2_none'] = 'No hi ha cap entrada seleccionada per a importar.';
$string['import_step2_prog'] = 'Importació en progrés';
$string['import_step2_total'] = 'S\'han importat {$a} entrades.';
$string['import_step2_conflicts'] = 'S\'han identificat {$a} entrades amb conflictes amb entrades existents.';
$string['import_step2_conflicts_submit'] = 'Importa entrades conflictives';

// My Participation.
$string['contribution'] = 'Aportacions';
$string['contribution_all'] = 'Aportacions - Qualsevol moment';
$string['contribution_from'] = 'Aportacions - De {$a}';
$string['contribution_to'] = 'Aportacions - A {$a}';
$string['contribution_fromto'] = 'Aportacions - De {$a->start} a {$a->end}';
$string['start'] = 'Des de';
$string['end'] = 'Fins a';
$string['displayperiod'] = 'Selecció d\'aportacions de data - a data.';
$string['info'] = 'Participació dins del període seleccionat.';
$string['displayperiod_help'] = '<p>Per defecte es seleccionen totes les entrades.</p>
+<p>Podeu seleccionar les entrades des d\'una data fins avui.</p>
+<p>Podeu seleccionar totes les entrades entre dues dates.</p>
+<p>O podeu seleccionar des de la primera entrada fins a una data</p>';
$string['nouserpostsfound'] = 'No es va publicar cap entrada durant aquest període.';
$string['nousercommentsfound'] = 'No es va publicar cap comentari durant aquest període.';
$string['numberpostsmore'] = 'I {$a} entrades més';
$string['numbercommentsmore'] = 'I {$a} comentaris mñes';
$string['viewmyparticipation'] = 'Mostra la meva participació';
$string['timestartenderror'] = 'La data de finalització no pot ser anterior a la data d\'inici';

// Read tracking
$string['readtracking'] = 'Seguiment de lectura';
$string['markread'] = 'Marca com a llegida';
$string['markunread'] = 'Marca com a no llegida';

// Reblogs
$string['allowreblogs'] = 'Permet reblogs (només blogs individuals)';
$string['maxreblogs'] = 'Nombre màxim de reblogs mostrats';
$string['numreblogs'] = '{$a} reblogs';
$string['onereblog'] = '1 reblog';
$string['reblog'] = 'Reblogueja';
$string['reblogged'] = 'Rebloguejat';
$string['undoreblog'] = 'Desfés reblog';

// Preview comments
$string['previewcomments'] = 'Nombre de comentaris previsualitzats';

// Advanced grading
$string['mygrade'] = 'La meva qualificació';

// Export link
$string['export'] = 'Exporta';

// Favourite comments
$string['markasfav'] = 'Marca com a favorit';
$string['markasnofav'] = 'Marca com a no favorit';
