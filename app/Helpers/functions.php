<?php

use App\Enums\SituacaoStatus;

if (!function_exists('getStatusSituacao')) {
    function getStatusSituacao(string $situacao): string {
        return SituacaoStatus::fromValue($situacao);
    }
}
