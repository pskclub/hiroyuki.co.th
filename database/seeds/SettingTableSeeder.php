<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'email' => 'passakon_p@hotmail.com',
            'features' => '<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                <h2>Features</h2>
                <p class="lead">ผู้ผลิตสายรัด PP/PET และจำหน่าย เครื่องรัด ชั้นนำจากต่างประเทศ ตลอดจนให้คำปรึกษา
                    งานด้านบรรุภัณฑ์ และ วัสดุที่ใช้ในงานแพ็คกิ้งในอุตสาหกรรม เช่น เครื่องรัดเหล็กพืด
                    เครื่องรัดสายพลาสติก ,
                    เครื่องพันฟิล์ม และฟิล์มยืดพันพาเลท ซึ่งผลิตภัณฑ์ ของบริษัทฯ ได้รับใบรับรอง คุณภาพ ROHS test และ ISO
                    14001, ISO 9001</p>
            </div>',
            'hiroyuki' => '<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                <h2>Hiroyuki (Thailand)</h2>
                <p class="lead">บริษัท ฮิโรยูกิ อินดัสตรีส์ จำกัด ก่อตั้งเมื่อปี 2001 ที่รัฐ Jahor Bahru ประเทศ มาเลเซีย
                    ประกอบการผลิตสายรัด Polypropylene (PP) และ Polyester (PET) , Cast stretch film และ PE Tying Twins
                    โดยมีกำลังผลิต 25,000 ตัน ต่อปี โดยจัดจำหน่ายให้กับลูกค้าในกลุ่ม ประเทศอาเซี่ยน , ยุโรป ตะวันออกกลาง
                    และประเทศในทวีปอเมริกา ซึ่งผลิตภัณฑ์ของบริษัทฯ ได้รับใบรับรองคุณภาพ ISO14001 และ ISO 9001</p>
            </div>',
            'network' => '<div class="row" style="margin-top: 20px">
            <div class="col-md-12">
                <address>
                    <b>Tokyo</b> : Hiroyuki Co.Ltd. Itabashiku, Japan . <br>
                    Tel : +81-3-391212-0917 , FAX :+81-3-391212-07712
                </address>
            </div>
            <div class="col-md-12">
                <address>
                    <b>Osaka</b> : 12-25-5 Higashi Mikuni , Yodogawaku, Osaka ,Japan. <br>
                    Tel : +81-12-12391-12811 , FAX :+81-12-12391-12310
                </address>
            </div>
            <div class="col-md-12">
                <address>
                    <b>Saitama</b> : NEO-ENGINEERING , Japan <br>
                    Tel : +81-128-1258-8951 , FAX :+81-128-1258-8952
                </address>
            </div>
            <div class="col-md-12">
                <address>
                    <b>Yangon</b> : Hiroyuki Resource Trading Co, Ltd. KannerStreet , Myanmar <br>
                    Tel :+95-9-12200-512279 ,+95-9-3105-122112
                </address>
            </div>
            <div class="col-md-12">
                <address>
                    <b> Malaysia</b> : Hiroyuki Industries (M) SDN BHD Johor , Malaysia. <br>
                    Tel : +120-7-598-5211 , Fax +120-7-599-12211
                </address>
            </div>
            <div class="col-md-12">
                <address>
                    <b>Hiroyuki (Thailand)</b> Bangkhunthien, Bangkok . <br>
                    Tel : + 12122 12112 3215-12 , Fax. +12122 12112 3217 <br>
                    Website: www.hiroyuki.co.th Email: hiro.thailand@hiroyuki.co.th
                </address>
            </div>
            <div class="col-md-12">
                <address>
                    <b>Hiroyuki Vietnam </b>, No.901 KinhDuong VuongStreet , BinhTan DisctrictHCM. ,Vietnam <br>
                    Tel : + 812 8 37512 2828 , Mobile : +812 938 153 3812
                </address>
            </div>

        </div>',
            'contact' => '<address>
                            <h5>Hiroyuki (Thailand) Co.,Ltd.</h5>
                            <p></p>
                            <p>319/23 ถนนแสมดำ แขวงแสมดำ เขตบางขุนเทียน
                                กรุงเทพมหานคร 10150 ประเทศไทย</p>
                            <p>319/23 Samaedam Road, Samaedam, Bangkhunthien
                                Bangkok 10150 Thailand</p>
                            <p>
                                Phone +662 416 3215-6 , +662 416 3217 <br>
                                Email hiro.thailand@hiroyuki.co.th <br>
                                Tax ID 0105559053421</p>
                        </address>',
        ]);
    }
}
