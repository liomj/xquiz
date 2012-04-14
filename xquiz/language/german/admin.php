<?php
define('_MD_PREFERENCES','Features');
define('_MD_UPDATE','Modul aktualisieren');
define('_QUIZ_INDEX','Index');
define('_QUIZ_QUIZS','Quiz-Übersicht');
define('_QUIZ_QUESTIONS','Fragen');
define('_QUIZ_STATISTICS','Statistik');
define('_QUIZ_PREFERENCE','Einstellungen');
define('_QUIZ_UPDATE','Modul aktualisieren');
define('_AM_QUIZ_MODADMIN','Moderate');
define('_AM_QUIZ_QUIZS_SELECT','Quiz wählen');
define('_QUIZ_NAME','Quiz Titel');
define('_QUIZ_DESC','Quiz Details');
define('_QUIZ_BDATE','Startdatum');
define('_QUIZ_EDATE','Enddatum');
define('_QUIZ_WEIGHT','Quiz Priorität');
define('_QUIZ_SUBMIT','Hinzufügen');
define('_QUIZ_ADDQUIZFORM','New quiz` form');
define('_QUIZ_UNAME','User');
define('_QUIZ_ACTIVE','AN');
define('_QUIZ_UNACTIVE','AUS');
define('_QUIZ_STATUS','Status');
define('_QUIZ_QUEST_NUM','Anzahl der Fragen');
define('_QUIZ_ACTION','Aktionen');
define('_QUIZ_DEL','Quiz löschen');
define('_QUIZ_STAT','Quiz Statistik');
define('_QUIZ_QUEST_ADD','Quiz hinzufügen');
define('_QUIZ_NEXT','Weiter');
define('_QUIZ_PREV','Zurück');
define('_AM_QUIZ_NEW','Quiz erstellen');
define('_AM_QUEST_FORM','Frage erstellen');
define('_QUIZ_DELQUIZFORM','Quiz löschen');
define('_AM_QUIZ_DELETE','Quiz löschen');
define('_QUIZ_DELETE_CAPTION','Soll das Quiz wirklich gelöscht werden?');
define('_QUIZ_SUBMIT_NO','Nein');
define('_QUEST_NAME','Fragen');
define('_QUEST_NUM','Nummer');
define('_QUEST_SCORE','Punkte');
define('_QUEST_CORRECT','Richtige Antwort');
define('_AM_QUEST_NEW','Neue Frage erstellen');
define('_AM_QUEST_GO','Vorschau');
define('_AM_QUESTION_GO','Fragen anzeigen');
define('_AM_INDEX','Index');
define('_AM_INDEX_ADD_QUEST','Sie können nur Fragen zu einem Quiz hinzufügen, wenn das Quiz noch nicht gestartet wurde.');
define('_AM_INDEX_USER_QUIZ','Das Quiz, das noch nicht gestartet wurde, wird den Mitgliedern nicht angezeigt.');
define('_AM_INDEX_USER_EX','Users can only try the tests that are not yet finished');
define('_AM_QUIZ_SEL','Optionen');
define('_QUIZ_ADD_QUESTION_FORM','Neue Frage erstellen');

define('_QUEST_NUMBER','Nummer');
define('_QUEST_DESC','Fragetext');
define('_QUEST_ANS1','Antwort 1');
define('_QUEST_ANS2','Antwort 2');
define('_QUEST_ANS3','Antwort 3');
define('_QUEST_ANS4','Antwort 4');
define('_QUEST_ANSWER','Richtige Antwort ist');
define('_QUIZ_DELQUESTFORM','Frage löschen');

define('_QUIZ_USER','Mitglied');
define('_QUIZ_USER_NAME','Name');
define('_QUIZ_SCORE','Punkte');
define('_QUIZ_DATE','Quiz Datum');
define('_QUEST_NUMBER_ERROR','Submitted data error');
define('_QUEST_SECURITY_ERROR','Error in submitted data,please try again');
define('_QUEST_SET_ERROR','Error in execution order');
define('_QUEST_DATABASE','Database connection error');
define('_QUEST_EXIST','A question with such title already exists in the database');
define('_QUEST_VALID_BDATE','Beginning date is not valid');
define('_QUEST_BDATE','Beginning date must be before the ending date');
define('_QUEST_VALID_EDATE','Ending date is not valid');
define('_QUEST_EDATE','Ending date must be later than the beginning date');
define('_QUIZ_EXIST','Ein Quiz mit diesen Namen ist bereits vorhanden');
define('_QUIZ_ADD','Quiz wurde erstellt');
define('_QUIZ_EDIT','Quiz wurde erfolgreich bearbeitet');
define('_QUIZ_DELETE','Quiz löschen');
define('_QUIZ_RETURN','Zurück zur Hauptseite');
define('_QUEST_ADD_RULE','You can only add questions to the quizzes that have not begun or ended');
define('_QUEST_ADD','Frage hinzugefügt');
define('_QUEST_EDIT','Frage erfolgreich bearbeitet.');
define('_QUEST_DELETE','Frage wurde gelöscht');
define('_AM_NEW_QUIZ','Neues Quiz erstellen');
define('_AM_NEW_QUEST','Neue Frage hinzufügen');
define('_AM_NO_QUIZ','Es wurde bisher noch kein Quiz erstellt');
define('_QUIZ_PERMISSIONS','Berechtigungen');
define('_QUIZ_PERM_FORM_TITLE','Berechtigungen für Kategorien.');
define('_QUIZ_PERM_FORM_DESC','Wählen Sie zu jeder Kategorie die Gruppen aus, welche Zugriff erhalten können.');
////////////////////////////////////////////////////////////////////////////////////////////////////////
define('_QUIZ_CATEGORIES','Kategorien');
define('_AM_NEW_CATEGORY','Neue Kategorie erstellen');
define('_CATEGORY_TITLE','Titel');
define('_CATEGORY_WEIGHT','Reihenfolge');
define('_AM_CATEGORY_NEW','Kategorie erstellen');
//define('','');
define('_USER_ANSWER','User Antwort');
define('_USER_ANSWER_DETAIL','Antworten der User');
define('_CATEGORY_PARENT','Elternkategorie');
define('_CATEGORY_DESC','Beschreibung');
define('_QUIZ_DELCATEGORY_FORM','Delete Category form');
define('_AM_CATEGORYIMG','Kategoriebild');
define('_AM_IMGNAEXLOC','Bildname auswählen %S');
define('_AM_CATEGORY_PICTURE','Bild hinzufügen');
define('_AM_UPLOAD_WARNING','<B>Bitte nutzen Sie nur kleine Bilder. Beachten Sie: Der Ordner "topics" benötigt Schreibrechte:<br />%s</B>');
define('_AM_VIEWFORM', 'Wer darf die Kategorie sehen?');
define('_AM_UPLOAD_ERROR','Fehler beim Hinzufügen der Datei, bitte Schreibrechte prüfen.');
define('_ADD_CATEGORY','Kategorie wurde erstellt.');
define('_EDIT_CATEGORY','Kategorie wurde erfolgreich bearbeiten.');
define('_DELETE_CATEGORY','Kategorie wurde gelöscht.');
define('_QUIZ_CATEGORY','Kategorie');
define('_QUIZ_NO_CATEGORY','Es gibt keine Kategorie. Bitte zuerste eine Kategorie hinzufügen.');
define('_QUIZ_CATEGORY_SELECT','Kategorie wählen.');
define('_QUIZ_NOTIFY','Information');
define('_QUIZ_VERSION_TITLE','Versions Infos');
define('_QUIZ_VERSION','Modul Version %s vom %s Modul');
define('_XOOPS_VERSION','Die '.(( defined('ICMS_VERSION_NAME') && ICMS_VERSION_NAME )?'ImpressCMS':'Xoops').' Version ist : %s');
define('_PHP_VERSION','PHP Version : %s');
define('_MYSQL_VERSION','MySQL Version : %s');
define('_QUIZ_CSV_EXPORT','Als CSV Exportieren');
define('_QUIZ_OPEN_CSV_ERR','Datei kann nicht geöffnet werden, prüfen Sie die Rechte des Ordners.');
define('_QUIZ_CSV_DOWNLOAD','Download CSV Datei.');
?>