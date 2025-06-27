#
.DEFAULT_GOAL:=	help
.PHONY:		help

#
help::		# Show this help
	@grep -E '^[a-zA-Z_-]+::' GNUmakefile | sort | awk -F'[:#]' '{print $$1 ":\t" $$NF}'

-include GNUmakefile.local
