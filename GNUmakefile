#
.DEFAULT_GOAL:=	help
.PHONY:		db help

#
db::		# Migrate database
	php phinx.php migrate

help::		# Show this help
	@grep -E '^[a-zA-Z_-]+::' GNUmakefile | sort | awk -F'[:#]' '{print $$1 ":\t" $$NF}'

-include GNUmakefile.local
