<?php

namespace PHPWatch\SymbolData;

class ConstantsSource implements DataSourceInterface {
    const NAME = 'const';
    private function gatherData() {
        return get_defined_constants(true);
    }
    public static function getAllData() {
        return (new self())->gatherData();
    }
}
