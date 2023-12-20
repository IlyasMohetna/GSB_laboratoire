<?php

namespace App\Models\VISITE;

use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    protected $table = 'visite__medicament';
    protected $primaryKey = 'id_medicament';
    protected $guarded = [];

    public function famille()
    {
        return $this->hasOne(FamilleMedicament::class, 'id_famille', 'id_famille');
    }

    public static function updateAllPhotos()
    {
        $photoUrls = [
            'https://cdn.pim.mesoigner.fr/mesoigner/825c8a51b31d89b451d7f566c90c4b5e/mesoigner-thumbnail-1000-1000-inset/5/8/3/8/9/3/produits/images/abacavir-lamivudine-biogaran-600-mg-300-mg-cpr-pell-plq-30.webp',
            'https://pharmaciedebenet.fr/wp-content/uploads/sites/38/image_produit-268045_411605478.png',
            'https://cdn.pim.mesoigner.fr/mesoigner/dfd062f821981945d7cd30831d5aae01/mesoigner-thumbnail-1000-1000-inset/7/7/6/9/5/3/produits/images/actonel-75-mg-comprime-pellicule.webp',
            'https://cdn.pim.mesoigner.fr/mesoigner/b75d3aa46a7e54025c7ddfbe0b427a3c/mesoigner-thumbnail-1000-1000-inset/6/3/8/8/9/3/produits/images/actonel-35-mg-cpr-gastro-res-plq-12.webp',
            'https://cdn.pim.mesoigner.fr/mesoigner/191d28c822b3323738700907e89b87f0/mesoigner-thumbnail-1000-1000-inset/8/2/2/1/4/3/produits/images/actonel-35-mg-comprime-pellicule.webp',
            'https://zubericlinic.com/wp-content/uploads/2018/09/acidum-phosphoricum.png',
            'https://cdn.pim.mesoigner.fr/mesoigner/bdacb5f24658f1009521e0859b185829/mesoigner-thumbnail-1000-1000-inset/3/7/2/8/5/3/produits/images/adrovance-70-mg-5600-ui-comprime.webp',
            'https://cdn.pim.mesoigner.fr/mesoigner/2cf2ea82787b2f84378d80b6435621aa/mesoigner-thumbnail-1000-1000-inset/8/5/7/8/5/3/produits/images/advilcaps-400-mg-caps-molle-plaq-14.webp',
            'https://www.pharma-gdd.com/media/cache/resolve/product_show/616476696c2d6d65642d3130306d672d646f756c657572732d65742d6669657672652d33302d636f6d7072696d65732d6661636548a3c114.jpg',
            'https://universpharmacie.fr/21585-large_default/complexe-lehning-103-aesculus-.webp',
        ];        

        $medicaments = self::all();
        foreach ($medicaments as $medicament) {
            $randomUrl = $photoUrls[array_rand($photoUrls)];
            $medicament->update(['photo_medicament' => $randomUrl]);
        }
    }
}
