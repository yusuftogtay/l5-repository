<?php

namespace YusufTogtay\Repository\Constants;

final class WhereConditionTypes
{
    const IN = 'IN';
    const NOT_IN = 'NOTIN';
    const DATE = 'DATE';
    const DAY = 'DAY';
    const MONTH = 'MONTH';
    const YEAR = 'YEAR';
    const EXISTS = 'EXISTS';
    const HAS = 'HAS';
    const HAS_MORPH = 'HASMORPH';
    const DOESNT_HAVE = 'DOESNTHAVE';
    const DOESNT_HAVE_MORPH = 'DOESNTHAVEMORPH';
    const BETWEEN = 'BETWEEN';
    const BETWEEN_COLUMNS = 'BETWEENCOLUMNS';
    const NOT_BETWEEN = 'NOTBETWEEN';
    const NOT_BETWEEN_COLUMNS = 'NOTBETWEENCOLUMNS';
    const RAW = 'RAW';
    const LIKE = 'LIKE';
    const DEFAULT = 'DEFAULT';
}
