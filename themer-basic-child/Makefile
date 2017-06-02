.PHONY: css watch

# Set dir of Makefile to a variable to use later
MAKEPATH := $(abspath $(lastword $(MAKEFILE_LIST)))
THEME := $(dir $(MAKEPATH))

css:
	sass --update --style=compressed "$(THEME)sass/style.scss":"$(THEME)style.css"

watch:
	sass --watch --style=compressed "$(THEME)sass/style.scss":"$(THEME)style.css"
