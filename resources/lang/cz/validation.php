<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute musí být přijmuto.',
    'active_url'           => ':attribute není validní URL adresa.',
    'after'                => ':attribute musí být datum před :date.',
    'after_or_equal'       => ':attribute musí být datum před nebo stejné jako :date.',
    'alpha'                => ':attribute může obsahovat pouze písmena.',
    'alpha_dash'           => ':attribute může obsahovat pouze písmena, čísla, and pomlčky.',
    'alpha_num'            => ':attribute může obsahovat pouze písmena a čísla.',
    'array'                => ':attribute musí být pole.',
    'before'               => ':attribute musí být datum před :date.',
    'before_or_equal'      => ':attribute musí být datum před nebo stejné jako :date.',
    'between'              => [
        'numeric' => ':attribute musí být mezi :min a :max.',
        'file'    => ':attribute musí být mezi :min a :max kilobyty.',
        'string'  => ':attribute musí být mezi :min a :max znaky.',
        'array'   => ':attribute musí být mezi :min a :max položkami.',
    ],
    'boolean'              => ':attribute pole musí být true nebo false.',
    'confirmed'            => ':attribute potvrzení není stejné.',
    'date'                 => ':attribute není platné datum.',
    'date_format'          => ':attribute není ve správném formátu :format.',
    'different'            => ':attribute a :other musí být rozdílné.',
    'digits'               => ':attribute musí být :digits čísla.',
    'digits_between'       => ':attribute musí být mezi :min a :max čísly.',
    'dimensions'           => ':attribute má špatný rozměr obrázku',
    'distinct'             => ':attribute pole má duplicitní hodnoty.',
    'email'                => ':attribute musí být validní emailová adresa.',
    'exists'               => 'vybraný :attribute je spravný.',
    'file'                 => ':attribute musí být složka.',
    'filled'               => ':attribute pole musí mít hodnotu.',
    'image'                => ':attribute musí být obrázek.',
    'in'                   => 'vybraný :attribute je spravný.',
    'in_array'             => ':attribute pole neexistuje v :other.',
    'integer'              => ':attribute musí být číslo.',
    'ip'                   => ':attribute musí být validní IPv4 adresa.',
    'ipv4'                 => ':attribute musí být validní IPv4 adresa.',
    'ipv6'                 => ':attribute musí být validní IPv6 adresa.',
    'json'                 => ':attribute musí být validní JSON.',
    'max'                  => [
        'numeric' => ':attribute nesmí být vetší než :max.',
        'file'    => ':attribute nesmí být vetší než :max kilobytů.',
        'string'  => ':attribute nesmí být vetší než :max znaků.',
        'array'   => ':attribute nesmí mít více než :max položek.',
    ],
    'mimes'                => ':attribute musí být typ souboru: :values.',
    'mimetypes'            => ':attribute musí být typ souboru: :values.',
    'min'                  => [
        'numeric' => ':attribute musí být alespoň :min.',
        'file'    => ':attribute musí být alespoň :min kilobytů.',
        'string'  => ':attribute musí být alespoň :min znaků.',
        'array'   => ':attribute musí být alespoň :min položek.',
    ],
    'not_in'               => 'Vybraný :attribute není validní.',
    'numeric'              => ':attribute musí být číslo.',
    'present'              => ':attribute pole musí být přítomno.',
    'regex'                => ':attribute format je validní.',
    'required'             => ':attribute pole je povinné.',
    'required_if'          => ':attribute pole je povinné když :other je :value.',
    'required_unless'      => ':attribute pole je povinné pokud :other je v :values.',
    'required_with'        => ':attribute pole je povinné když :values je přítomná.',
    'required_with_all'    => ':attribute pole je povinné když :values je přítomná.',
    'required_without'     => ':attribute pole je povinné když :values není přítomná.',
    'required_without_all' => ':attribute pole je povinné když žádná z :values není přítomná.',
    'same'                 => ':attribute a :other se musí shodovat.',
    'size'                 => [
        'numeric' => ':attribute musí být :size.',
        'file'    => ':attribute musí být :size kilobytů.',
        'string'  => ':attribute musí být :size znaků.',
        'array'   => ':attribute musí obsahovat :size položek.',
    ],
    'string'               => ':attribute musí být string .',
    'timezone'             => ':attribute musí být časová zona.',
    'unique'               => ':attribute byl již použit.',
    'uploaded'             => ':attribute nahrávání selhalo.',
    'url'                  => ':attribute formát není validní.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
