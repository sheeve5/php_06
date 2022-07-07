<?php

require_once 'init.php';
// Skrypt kontrolera głównego jako jedyny "punkt wejścia" inicjuje aplikację.

// Inicjacja ładuje konfigurację, definiuje funkcje getConf(), getMessages() oraz getSmarty(),
// pozwalające odwołać się z każdego miejsca w systemie do obiektów konfiguracji, messages i smarty.

// Ponadto ładuje skrypt funkcji pomocniczych (functions.php) oraz wczytuje parametr 'action' do zmiennej $action.
// Wystarczy już tylko podjąć decyzję co zrobić na podstawie $action.

// Dodatkowo zmieniono organizację kontrolerów i widoków. Teraz wszystkie są w odpowiednio nazwanych folderach w app


//2. wykonanie akcji
switch ($action) {
	default : // 'calcView'
	    	// utwórz obiekt i uzyj
                // (autoloader sam załaduje plik na podstawie przestrzeni nazw względem folderu głównego aplikacji)
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView();
	break;
	case 'calcCompute' :
		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process();
	break;
    	case 'otherAction' :
		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\OtherCtrl();
		$ctrl->generateView();
	break;
	case 'action1' :
		print('hello');
	break;
	case 'action2' :
		print('bye bye');
	break;
}
