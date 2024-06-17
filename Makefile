install: # установить зависимости
	composer install
	npm install
brain-games:
	./bin/brain-games
validate:
	composer validate
