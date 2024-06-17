install: # установить зависимости
	composer install
	npm install
brain-games:
	./bin/brain-games.php
validate:
	composer validate
