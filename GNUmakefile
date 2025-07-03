#
.DEFAULT_GOAL:=	default
.PHONY:		clean default install lint test

#
clean::
	rm -fr vendor/

default:: lint test
	@false

install::
	composer install

lint:: install
	./vendor/bin/phpcs --standard=PSR12 public/ tests/

test:: install
	./vendor/bin/phpunit tests/
