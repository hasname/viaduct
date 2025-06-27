#
.DEFAULT_GOAL:=	help
.PHONY:		db deploy help lint

#
db::		# Migrate database
	php phinx.php migrate

deploy::	# Deploy application
	rsync -Favz --delete-after ./ ${SSH_USER}@${SSH_HOST}:/srv/viaduct.hasname.com/

help::		# Show this help
	@grep -E '^[a-zA-Z_-]+::' GNUmakefile | sort | awk -F'[:#]' '{print $$1 ":\t" $$NF}'

lint::		# Run PHP CodeSniffer
	./vendor/bin/phpcs public/ src/

-include GNUmakefile.local
