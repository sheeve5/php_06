<?php namespace app\controllers;
class OtherCtrl{
    
    	public function generateView(){
	getSmarty()->assign('page_title','Przykład 06a (poprzedni)');
		getSmarty()->assign('page_description','Aplikacja z jednym "punktem wejścia". Zmiana w postaci nowej struktury foderów, skryptu inicjalizacji oraz pomocniczych funkcji.');
		getSmarty()->assign('page_header','Kontroler główny');

		
		getSmarty()->display('OtherView.tpl'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
	}
    
    
}

