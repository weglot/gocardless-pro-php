SCHEMA_PATH=
CRANK_PATH =../bin/crank
OUT_PATH=.out
CODE_PATHS=./lib ./tests

build: crank
	$(CRANK_PATH) -c ../php.overrides.json -o $(OUT_PATH) -s $(SCHEMA_PATH) -t ./
	mv .composer_vendor $(OUT_PATH)

test: vendor/
	./vendor/bin/phpunit

syntax: vendor/
	./vendor/bin/phpcs --standard=phpcs-ruleset.xml $(CODE_PATHS)

vendor:
	composer install

fixsyntax: vendor
	./vendor/bin/phpcbf --standard=phpcs-ruleset.xml $(CODE_PATHS)

clean:
	mv ./$(OUT_PATH)/vendor .composer_vendor
	rm -r ./.out