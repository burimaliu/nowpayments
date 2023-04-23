<?php

include 'index.php';

// testing Currency Endpoint
$nowPayment = new \Onetoweb\NOWPayments\Client( $apiKey, $testMode);
$currency = $nowPayment->currency->get();

echo '<pre>';
print_r($currency);
echo '</pre>';

// response status:

/* Array
(
    [currencies] => Array
        (
            [0] => usdterc20
            [1] => etharb
            [2] => cake
            [3] => ctsi
            [4] => avaxc
            [5] => sol
            [6] => usdtbsc
            [7] => rvn
            [8] => ilv
            [9] => xyo
            [10] => algo
            [11] => etc
            [12] => hot
            [13] => poolx
            [14] => now
            [15] => avaerc20
            [16] => stkk
            [17] => usdp
            [18] => zbc
            [19] => nftb
            [20] => btc
            [21] => aave
            [22] => near
            [23] => poodl
            [24] => matic
            [25] => dgmoon
            [26] => guard
            [27] => rbif
            [28] => brise
            [29] => fitfi
            [30] => keanu
            [31] => bsv
            [32] => vib
            [33] => yfi
            [34] => axs
            [35] => tusdtrc20
            [36] => bttcbsc
            [37] => coti
            [38] => ada
            [39] => dao
            [40] => pika
            [41] => kmd
            [42] => raca
            [43] => xcur
            [44] => busdbsc
            [45] => chr
            [46] => ark
            [47] => zec
            [48] => xtz
            [49] => tup
            [50] => usddtrc20
            [51] => one
            [52] => avax
            [53] => ht
            [54] => marsh
            [55] => onigi
            [56] => gt
            [57] => fil
            [58] => zen
            [59] => cns
            [60] => bat
            [61] => usdcmatic
            [62] => eos
            [63] => xmr
            [64] => tenshi
            [65] => mana
            [66] => floki
            [67] => maticmainnet
            [68] => lgcy
            [69] => theta
            [70] => ton
            [71] => dash
            [72] => omg
            [73] => bttc
            [74] => rep
            [75] => kibabsc
            [76] => gari
            [77] => klv
            [78] => btg
            [79] => bch
            [80] => xlm
            [81] => dot
            [82] => usdt
            [83] => sand
            [84] => dogecoin
            [85] => sxpmainnet
            [86] => kiba
            [87] => stpt
            [88] => firo
            [89] => knc
            [90] => busd
            [91] => mx
            [92] => babydoge
            [93] => ntvrk
            [94] => kishu
            [95] => ava
            [96] => bel
            [97] => hbar
            [98] => icx
            [99] => dgb
            [100] => usdtarc20
            [101] => arb
            [102] => uni
            [103] => om
            [104] => fluf
            [105] => usdttrc20
            [106] => usdtsol
            [107] => tusd
            [108] => gafa
            [109] => ethw
            [110] => boba
            [111] => enj
            [112] => pit
            [113] => quack
            [114] => hoge
            [115] => galaerc20
            [116] => jasmy
            [117] => arv
            [118] => fun
            [119] => okb
            [120] => hotcross
            [121] => cvc
            [122] => eth
            [123] => ftmmainnet
            [124] => cult
            [125] => usdc
            [126] => trvl
            [127] => egld
            [128] => shib
            [129] => xvg
            [130] => gal
            [131] => nano
            [132] => ethbsc
            [133] => dcr
            [134] => cro
            [135] => tko
            [136] => neo
            [137] => bnbmainnet
            [138] => lunc
            [139] => blocks
            [140] => bifi
            [141] => ocean
            [142] => leash
            [143] => link
            [144] => super
            [145] => ggtkn
            [146] => xrp
            [147] => grt
            [148] => usdtarb
            [149] => ftt
            [150] => tfuel
            [151] => doge
            [152] => ttc
            [153] => ont
            [154] => tomo
            [155] => vet
            [156] => ape
            [157] => srk
            [158] => cudos
            [159] => front
            [160] => cusd
            [161] => zil
            [162] => bnbbsc
            [163] => 1inch
            [164] => sfund
            [165] => gas
            [166] => brgbsc
            [167] => strax
            [168] => nwc
            [169] => avabsc
            [170] => waves
            [171] => shibbsc
            [172] => dino
            [173] => avn
            [174] => chz
            [175] => arpa
            [176] => xcad
            [177] => flokibsc
            [178] => bone
            [179] => klay
            [180] => 1inchbsc
            [181] => atom
            [182] => ftm
            [183] => iotx
            [184] => xem
            [185] => c98
            [186] => ltc
            [187] => xdc
            [188] => volt
            [189] => trx
            [190] => usdcarc20
            [191] => dai
            [192] => luna
            [193] => qtum
            [194] => divi
        )

) */