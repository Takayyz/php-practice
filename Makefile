.DEFAULT_GOAL := help
MAKEFILE_DIR = $(dir $(abspath $(lastword $(MAKEFILE_LIST))))

help: ## makeコマンドのサブコマンドリストと、各コマンドの説明を表示します
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY := start
start: ## PHPコンテナをインタラクティブモードで起動(停止後コンテナは自動削除)
	@docker build -t php-sandbox:8.1 .
	@docker run -it --rm --name php-sandbox -v $(MAKEFILE_DIR)/src:/var/tmp php-sandbox:8.1 && rm -rf ./src/vendor
