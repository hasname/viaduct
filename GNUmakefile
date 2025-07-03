#
.DEFAULT_GOAL:=	default
.PHONY:		clean default deploy install lint test

#
clean::
	rm -fr vendor/

default:: lint test
	@false

deploy:: install
	rsync -Favz --delete-after ./ ${SSH_USER}@${SSH_HOST}:/srv/viaduct.hasname.com/

install:: clean
	composer install

lint:: install
	./vendor/bin/phpcs --standard=PSR12 public/ tests/

test:: install
	./vendor/bin/phpunit tests/

-include GNUmakefile.local
