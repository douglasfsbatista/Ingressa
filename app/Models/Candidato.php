<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Candidato extends Model
{
    use HasFactory;

    public const ETNIA_E_COR = [
        1 => 'BRANCA',
        2 => 'PRETA',
        3 => 'PARDA',
        4 => 'AMARELA',
        5 => 'INDÍGENA',
    ];

    public const NECESSIDADES = [
        'nenhuma' => 'Nenhuma',
        2017 => 'Altas habilidades/Superdotação',
        2013 => 'Autismo infantil',
        2008 => 'Deficiência auditiva',
        2009 => 'Deficiência física',
        2012 => 'Deficiência intelectual',
        2011 => 'Deficiência múltipla',
        2001 => 'Surdez',
        2004 => 'Cegueira',
        2005 => 'Visão sub-normal ou baixa visão',
        2014 => 'Síndrome de Asperger',
        2015 => 'Síndrome de Rett',
        2010 => 'Surdocegueira',
        2016 => 'Transtorno Desintegrativo da Infância',
    ];

    public const ETNIA = [
        'indigena' => 'Indígena',
        'quilombola' => 'Quilombola',
        'outros' => 'Outros',
    ];

    public const ESTADO_CIVIL = [
        1 => 'Solteiro(a)',
        2 => 'Casado(a)',
        3 => 'Separado(a) judicialmente',
        4 => 'Divorciado(a)',
        5 => 'Viuvo(a)',
    ];

    public const PAISES_ESTRANGEIROS = [
        'AFG' => 'Afeganistão',
        'ZAF' => 'África do Sul',
        'ALB' => 'Albânia',
        'DEU' => 'Alemanha',
        'AND' => 'Andorra',
        'AGO' => 'Angola',
        'AIA' => 'Anguila',
        'ATA' => 'Antártica',
        'ATG' => 'Antígua e Barbuda',
        'SAU' => 'Arábia Saudita',
        'DZA' => 'Argélia',
        'ARG' => 'Argentina',
        'ARM' => 'Armênia',
        'ABW' => 'Aruba',
        'AUS' => 'Austrália',
        'AUT' => 'Áustria',
        'AZE' => 'Azerbaijão',
        'BHS' => 'Bahamas',
        'BHR' => 'Bahrein',
        'BGD' => 'Bangladesh',
        'BRB' => 'Barbados',
        'BLR' => 'Belarus',
        'BEL' => 'Bélgica',
        'BLZ' => 'Belize',
        'BEN' => 'Benin',
        'BMU' => 'Bermudas',
        'BOL' => 'Bolívia',
        'BIH' => 'Bósnia e Herzegovina',
        'BWA' => 'Botsuana',
        'BRN' => 'Brunei',
        'BGR' => 'Bulgária',
        'BFA' => 'Burkina Faso',
        'BDI' => 'Burundi',
        'BTN' => 'Butão',
        'CPV' => 'Cabo Verde',
        'CMR' => 'Camarões',
        'KHM' => 'Camboja',
        'CAN' => 'Canadá',
        'KAZ' => 'Cazaquistão',
        'TCD' => 'Chade',
        'CHL' => 'Chile',
        'CHN' => 'China',
        'CYP' => 'Chipre',
        'VAT' => 'Cidade do Vaticano',
        'SGP' => 'Cingapura',
        'COL' => 'Colômbia',
        'COM' => 'Comores',
        'PRK' => 'Coréia do Norte',
        'KOR' => 'Coréia do Sul',
        'CIV' => 'Costa do Marfim',
        'CRI' => 'Costa Rica',
        'HRV' => 'Croácia',
        'CUB' => 'Cuba',
        'CUW' => 'Curaçao',
        'DNK' => 'Dinamarca',
        'DJI' => 'Djibouti',
        'DMA' => 'Dominica',
        'EGY' => 'Egito',
        'SLV' => 'El Salvador',
        'ARE' => 'Emirados Árabes Unidos',
        'ECU' => 'Equador',
        'ERI' => 'Eritreia',
        'SVK' => 'Eslováquia',
        'SVN' => 'Eslovênia',
        'ESP' => 'Espanha',
        'FSM' => 'Estados Federados da Micronésia',
        'USA' => 'Estados Unidos da América',
        'EST' => 'Estônia',
        'SWZ' => 'Eswatini',
        'ETH' => 'Etiópia',
        'FJI' => 'Fiji',
        'PHL' => 'Filipinas',
        'FIN' => 'Finlândia',
        'FRA' => 'França',
        'GAB' => 'Gabão',
        'GMB' => 'Gâmbia',
        'GHA' => 'Gana',
        'GEO' => 'Geórgia',
        'SGS' => 'Geórgia do Sul e as Ilhas Sandwich do Sul',
        'GIB' => 'Gibraltar',
        'GRC' => 'Grécia',
        'GRD' => 'Grenada',
        'GRL' => 'Gronelândia',
        'GLP' => 'Guadalupe',
        'GUM' => 'Guam',
        'GTM' => 'Guatemala',
        'GGY' => 'Guernsey',
        'GUY' => 'Guiana',
        'GUF' => 'Guiana Francesa',
        'GIN' => 'Guiné',
        'GNQ' => 'Guiné Equatorial',
        'GNB' => 'Guiné-Bissau',
        'HTI' => 'Haiti',
        'HND' => 'Honduras',
        'HKG' => 'Hong Kong',
        'HUN' => 'Hungria',
        'YEM' => 'Iêmen',
        'BVT' => 'Ilha Bouvet',
        'REU' => 'Ilha da Reunião',
        'IMN' => 'Ilha de Man',
        'CXR' => 'Ilha de Natal',
        'NFK' => 'Ilha Norfolk',
        'ALA' => 'Ilhas Åland',
        'CYM' => 'Ilhas Cayman',
        'CCK' => 'Ilhas Cocos',
        'COK' => 'Ilhas Cook',
        'FRO' => 'Ilhas Faroe',
        'FLK' => 'Ilhas Malvinas',
        'MNP' => 'Ilhas Marianas do Norte',
        'MHL' => 'Ilhas Marshall',
        'UMI' => 'Ilhas Menores Distantes dos Estados Unidos',
        'PCN' => 'Ilhas Pitcairn',
        'SLB' => 'Ilhas Salomão',
        'TCA' => 'Ilhas Turcas e Caicos',
        'VGB' => 'Ilhas Virgens (Reino Unido)',
        'VIR' => 'Ilhas Virgens dos Estados Unidos',
        'IND' => 'Índia',
        'IDN' => 'Indonésia',
        'IRN' => 'Irã',
        'IRQ' => 'Iraque',
        'IRL' => 'Irlanda',
        'ISL' => 'Islândia',
        'ISR' => 'Israel',
        'ITA' => 'Itália',
        'JAM' => 'Jamaica',
        'JPN' => 'Japão',
        'JEY' => 'Jersey',
        'JOR' => 'Jordânia',
        'KIR' => 'Kiribati',
        'XKX' => 'Kosovo',
        'KWT' => 'Kuwait',
        'LAO' => 'Laos',
        'LSO' => 'Lesotho',
        'LVA' => 'Letônia',
        'LBN' => 'Líbano',
        'LBR' => 'Libéria',
        'LBY' => 'Líbia',
        'LIE' => 'Liechtenstein',
        'LTU' => 'Lituânia',
        'LUX' => 'Luxemburgo',
        'MAC' => 'Macau',
        'MDG' => 'Madagascar',
        'MYS' => 'Malásia',
        'MWI' => 'Malauí',
        'MDV' => 'Maldivas',
        'MLI' => 'Mali',
        'MLT' => 'Malta',
        'MAR' => 'Marrocos',
        'MTQ' => 'Martinica',
        'MUS' => 'Maurício',
        'MRT' => 'Mauritânia',
        'MYT' => 'Mayotte',
        'MEX' => 'México',
        'MMR' => 'Mianmar',
        'MOZ' => 'Moçambique',
        'MDA' => 'Moldávia',
        'MNG' => 'Mongólia',
        'MNE' => 'Montenegro',
        'MSR' => 'Montserrat',
        'NAM' => 'Namíbia',
        'NRU' => 'Nauru',
        'NPL' => 'Nepal',
        'NIC' => 'Nicarágua',
        'NER' => 'Níger',
        'NGA' => 'Nigéria',
        'NIU' => 'Niue',
        'MKD' => 'Norte da Macedônia',
        'NOR' => 'Noruega',
        'NCL' => 'Nova Caledônia',
        'NZL' => 'Nova Zelândia',
        'OMN' => 'Omã',
        'HMD' => 'Ouvido e Ilhas McDonald',
        'NLD' => 'Países Baixos',
        'BES' => 'Países Baixos Caribenhos',
        'PLW' => 'Palau',
        'PSE' => 'Palestina',
        'PAN' => 'Panamá',
        'PNG' => 'Papua Nova Guiné',
        'PAK' => 'Paquistão',
        'PRY' => 'Paraguai',
        'PER' => 'Peru',
        'PYF' => 'Polinésia Francesa',
        'POL' => 'Polônia',
        'PRI' => 'Porto Rico',
        'PRT' => 'Portugal',
        'MCO' => 'Principado de Mônaco',
        'QAT' => 'Qatar',
        'KEN' => 'Quênia',
        'KGZ' => 'Quirguizistão',
        'GBR' => 'Reino Unido',
        'CAF' => 'República Centro-Africana',
        'COD' => 'República Democrática do Congo',
        'COG' => 'República do Congo',
        'DOM' => 'República Dominicana',
        'ROU' => 'Romênia',
        'RWA' => 'Ruanda',
        'RUS' => 'Rússia',
        'ESH' => 'Saara Ocidental',
        'WSM' => 'Samoa',
        'ASM' => 'Samoa Americana',
        'SHN' => 'Santa Helena, Ascensão e Tristão da Cunha',
        'LCA' => 'Santa Lúcia',
        'BLM' => 'Santo Bartolomeu',
        'SMR' => 'São Marino',
        'MAF' => 'São Martinho',
        'SPM' => 'São Pedro e Miquelon',
        'STP' => 'São Tomé e Príncipe',
        'VCT' => 'São Vicente e as Granadinas',
        'SEN' => 'Senegal',
        'SLE' => 'Serra Leoa',
        'SRB' => 'Sérvia',
        'SYC' => 'Seychelles',
        'SXM' => 'Sint Maarten',
        'SYR' => 'Síria',
        'SOM' => 'Somália',
        'LKA' => 'Sri Lanka',
        'KNA' => 'St. Kitts e Nevis',
        'SDN' => 'Sudão',
        'SSD' => 'Sudão do Sul',
        'SWE' => 'Suécia',
        'CHE' => 'Suíça',
        'SUR' => 'Suriname',
        'SJM' => 'Svalbard e Jan Mayen',
        'THA' => 'Tailândia',
        'TWN' => 'Taiwan',
        'TJK' => 'Tajiquistão',
        'TZA' => 'Tanzânia',
        'CZE' => 'Tcheca',
        'IOT' => 'Território Britânico do Oceano Índico',
        'ATF' => 'Territórios Franceses do Sul e Antártico',
        'TLS' => 'Timor Leste',
        'TGO' => 'Togo',
        'TKL' => 'Tokelau',
        'TON' => 'Tonga',
        'TTO' => 'Trinidad e Tobago',
        'TUN' => 'Tunísia',
        'TKM' => 'Turcomenistão',
        'TUR' => 'Turquia',
        'TUV' => 'Tuvalu',
        'UKR' => 'Ucrânia',
        'UGA' => 'Uganda',
        'URY' => 'Uruguai',
        'UZB' => 'Uzbequistão',
        'VUT' => 'Vanuatu',
        'VEN' => 'Venezuela',
        'VNM' => 'Vietnã',
        'WLF' => 'Wallis e Futuna',
        'ZMB' => 'Zâmbia',
        'ZWE' => 'Zimbábue',
    ];

    protected $fillable = [
        'user_id',
        'no_inscrito',
        'no_social',
        'nu_cpf_inscrito',
        'dt_nascimento',
        'orgao_expedidor',
        'uf_rg',
        'data_expedicao',
        'titulo',
        'zona_eleitoral',
        'secao_eleitoral',
        'cidade_natal',
        'reside',
        'uf_natural',
        'pais_natural',
        'estado_civil',
        'pai',
        'localidade',
        'escola_ens_med',
        'uf_escola',
        'ano_conclusao',
        'modalidade',
        'concluiu_publica',
        'necessidades',
        'etnia_e_cor',
        'etnia',
        'trabalha',
        'grupo_familiar',
        'valor_renda',
        'atualizar_dados',
    ];

    public function inscricoes()
    {
        return $this->hasMany(Inscricao::class, 'candidato_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getCpfPDF()
    {
        return Str::mask($this->nu_cpf_inscrito, '*', 3, 4);
    }

    public function isPretoOrPardo()
    {
        return $this->etnia_e_cor == 2 || $this->etnia_e_cor == 3;
    }
}
