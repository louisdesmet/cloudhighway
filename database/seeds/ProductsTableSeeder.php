<?php

use Illuminate\Database\Seeder;
use App\Product;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert(array(
            array('image' => '9HV5iEyS9dRPgYd.png', 'name'=>'Office 365 Personal', 'category_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'nZ0NCtQ8CjXzXF5.jpg', 'name'=>'Office 365 Home', 'category_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'AneBtai1PnpVUZM.jpeg', 'name'=>'Office 2019 Home & Student', 'category_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'UFEAhuoDF57f5gA.jpeg', 'name'=>'Office 2019 Home & Business', 'category_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'sLjAo1Lg1kj004P.jpg', 'name'=>'Office 2016 Home & Student', 'category_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'L9qZGS9E0SbttZS.jpg', 'name'=>'Office 2016 Home & Business', 'category_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),           
            array('image' => 'guGSUrGue8D3OE8.png', 'name'=>'Office 365', 'category_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'VUNHAxg7iTyWyWY.png', 'name'=>'Managed Office 365', 'category_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),         
            array('image' => 'V2yc3Zfa8aoui05.jpg', 'name'=>'Microsoft 365', 'category_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'kYFsS9s8b462d6B.png', 'name'=>'Office 365 Education', 'category_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'IM4vlkdMdYPCkv1.png', 'name'=>'Skype for Business', 'category_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'Oe9BTaSZSHo40G5.jpg', 'name'=>'One Drive for Business', 'category_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => '0PV1L4r1mSLF45n.jpg', 'name'=>'Microsoft Visio', 'category_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'dPeGYmCjQOkgBUW.jpg', 'name'=>'Microsoft Intune', 'category_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'b0op76ah01bFvT7.jpg', 'name'=>'Microsoft Project', 'category_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'ORG07YEsarjwF64.jpg', 'name'=>'Nomadesk', 'category_id' => 2, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'KkThd1Bp1GotXIR.png', 'name'=>'Cloudhighway Back-up', 'category_id' => 2, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'zBwSl28EBDJ4zpz.jpg', 'name'=>'Acronis True Image Subscription incl.250 GB Cloud Storage, 1 year', 'category_id' => 2, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'jg9NhMoVk0DxnNK.jpg', 'name'=>'Acronis True Image Premium Subscription incl. 1TB Cloud Storage, 1 year', 'category_id' => 2, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'YJU2bmXVBV2R4Oz.jpg', 'name'=>'Acronis True Image 2018', 'category_id' => 2, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'XtwzleYSKTojDJC.png', 'name'=>'Gdata Antivirus business', 'category_id' => 3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'Bj44fUn4y4MlK7L.png', 'name'=>'Gdata Antivirus consumer', 'category_id' => 3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => '1EmG4v5hPzxNqBR.png', 'name'=>'Gdata Client Security', 'category_id' => 3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'gdL3FBrZzV6mf1C.png', 'name'=>'Gdata Endpoint Protection', 'category_id' => 3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => '6YlFdVNN4wLAfWk.png', 'name'=>'Gdata Internet Security', 'category_id' => 3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => '1QbVcmMCD7tiTpo.png', 'name'=>'Gdata Total Protection', 'category_id' => 3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => '0TENmfFsdPvF4jq.jpg', 'name'=>'Bullguard Antivirus', 'category_id' => 3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'XRj9v5expFWjFFJ.jpg', 'name'=>'Bullguard Internet Security', 'category_id' => 3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'VBwYaYDKxFP9mKy.png', 'name'=>'DV: Positive SSL Wildcard (Comodo)', 'category_id' => 3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'pnA3n8NtpWP9bDd.png', 'name'=>'DV: Essential SSL (Comodo)', 'category_id' => 3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'JSNxDAWqNbrqSzB.png', 'name'=>'DV: ssl123 (Thawte)', 'category_id' => 3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),           
            array('image' => 'pBI9ez83hjC2nwz.png', 'name'=>'SkyHi Flex', 'category_id' => 4, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),          
            array('image' => 'VnQPYbxHLxq2Mdq.png', 'name'=>'Cloud Server', 'category_id' => 5, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'CXi7q7a6bYc6WbB.png', 'name'=>'Webhosting Performance', 'category_id' => 6, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'fVvq3ctRZoxlaUf.png', 'name'=>'Website Builder: Nanosite', 'category_id' => 6, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'nG2iMmeljiod7Mn.png', 'name'=>'Website Builder: Maxisite', 'category_id' => 6, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'f7sjYfKsDsndWwD.png', 'name'=>'Flexishop', 'category_id' => 6, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'eczfJDjxRKWxcN3.png', 'name'=>'Registreer domein', 'category_id' => 6, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'UbCjlisPJF6txak.png', 'name'=>'Domein verhuizen', 'category_id' => 6, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),           
            array('image' => 'kbWaJ92c0BBJZvC.png', 'name'=>'N-Able Starter Pack', 'category_id' => 7, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'oECv7Er1OhMA5Va.png', 'name'=>'N-Able Licensed', 'category_id' => 7, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'mloc656iR1pYPbI.png', 'name'=>'N-Able Trial', 'category_id' => 7, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'pDdl0VbIxozt9v3.png', 'name'=>'Hyperdesk Trial', 'category_id' => 7, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),           
            array('image' => 'OI698UlSmdvHxlz.png', 'name'=>'Remote Intervention', 'category_id' => 8, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'TFi6FPhuHO80dTk.png', 'name'=>'On Site Intervention', 'category_id' => 8, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'dQO9vL9dcyy6Rdr.png', 'name'=>'Office 365 Initiële Configuratie', 'category_id' => 9, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('image' => 'H9aSi7c5CsHaAWr.jpg', 'name'=>'Nomadesk Initiële Configuratie', 'category_id' => 9, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'))
           
            
            
            
        ));
    }
}
