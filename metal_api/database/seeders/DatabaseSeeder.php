<?php

namespace Database\Seeders;

use App\Models\ExtraItem;
use App\Models\Ledger;
use App\Models\Product;
use App\Models\Unit;
use App\Models\VoucherType;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserType;
use App\Models\ProductCategory;
use App\Models\TransactionType;
use App\Models\LedgerGroup;
use App\Models\CustomerCategory;
use App\Models\State;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //person_types table data
        UserType::create(['user_type_name' => 'Owner']);
        UserType::create(['user_type_name' => 'Manager']);
        UserType::create(['user_type_name' => 'Manager Sales']);
        UserType::create(['user_type_name' => 'Manager Accounts']);
        UserType::create(['user_type_name' => 'Office Staff']);
        UserType::create(['user_type_name' => 'Worker']);
        UserType::create(['user_type_name' => 'Developer']);
        UserType::create(['user_type_name' => 'Customer']);
        $this->command->info('User Type creation Finished');

        User::create(['user_name'=>'Arindam Biswas','mobile1'=>'9836444999','mobile2'=>'100','email'=>'arindam','password'=>"81dc9bdb52d04dc20036dbd8313ed055",'user_type_id'=>1]);

        ProductCategory::create(['category_name' => 'Brassh']);
        ProductCategory::create(['category_name' => 'Copper']);
        ProductCategory::create(['category_name' => 'Others']);

        Unit::create(['unit_name' => 'kg', 'formal_name' => 'Kilogram']);
        Unit::create(['unit_name' => 'pcs', 'formal_name' => 'Pieces']);
        Unit::create(['unit_name' => 'gm', 'formal_name' => 'Gram']);
        Unit::create(['unit_name' => 'inch', 'formal_name' => 'Inches']);

        // Product has separate file
        // php artisan db:seed --class=ProductSeeder


        //Transaction types
        TransactionType::create(['transaction_name'=>'Dr.','formal_name'=>'Debit','transaction_type_value'=>1]);
        TransactionType::create(['transaction_name'=>'Cr.','formal_name'=>'Credit','transaction_type_value'=>-1]);
        //Ledger Groups
        LedgerGroup::insert([
            ['group_name'=>'Current Assets'],           //1
            ['group_name'=>'Indirect Expenses'],        //2
            ['group_name'=>'Current Liabilities'],      //3
            ['group_name'=>'Fixed Assets'],             //4
            ['group_name'=>'Direct Incomes'],           //5
            ['group_name'=>'Indirect Incomes'],         //6
            ['group_name'=>'Bank Account'],             //7
            ['group_name'=>'Loans & Liabilities'],      //8
            ['group_name'=>'Bank OD'],                  //9
            ['group_name'=>'Branch & Division'],        //10
            ['group_name'=>'Capital Account'],          //11
            ['group_name'=>'Direct Expenses'],          //12
            ['group_name'=>'Cash in Hand'],             //13
            ['group_name'=>'Stock in Hand'],            //14
            ['group_name'=>'Sundry Creditors'],         //15
            ['group_name'=>'Sundry Debtors'],           //16
            ['group_name'=>'Suspense Account'],         //17
            ['group_name'=>'Indirect Income'],          //18
            ['group_name'=>'Sales Account'],            //19
            ['group_name'=>'Duties & Taxes'],           //20
            ['group_name'=>'Investment'],               //21
            ['group_name'=>'Purchase Account'],         //22
            ['group_name'=>'Investments']               //23
        ]);

        //customer_categories table data
        CustomerCategory::create(['customer_category_name'=>'Not Applicable']);
        CustomerCategory::create(['customer_category_name'=>'Good']);
        CustomerCategory::create(['customer_category_name'=>'Better']);
        CustomerCategory::create(['customer_category_name'=>'Best']);
        CustomerCategory::create(['customer_category_name'=>'Excellent']);
        State::insert([
            ['state_code'=>0,'state_name'=>'Not applicable'],
            ['state_code'=>1,'state_name'=>'Jammu & Kashmir'],
            ['state_code'=>2,'state_name'=>'Himachal Pradesh'],
            ['state_code'=>3,'state_name'=>'Punjab'],
            ['state_code'=>4,'state_name'=>'Chandigarh'],
            ['state_code'=>5,'state_name'=>'Uttranchal'],
            ['state_code'=>6,'state_name'=>'Haryana'],
            ['state_code'=>7,'state_name'=>'Delhi'],
            ['state_code'=>8,'state_name'=>'Rajasthan'],
            ['state_code'=>9,'state_name'=>'Uttar Pradesh'],
            ['state_code'=>10,'state_name'=>'Bihar'],
            ['state_code'=>11,'state_name'=>'Sikkim'],
            ['state_code'=>12,'state_name'=>'Arunachal Pradesh'],
            ['state_code'=>13,'state_name'=>'Nagaland'],
            ['state_code'=>14,'state_name'=>'Manipur'],
            ['state_code'=>15,'state_name'=>'Mizoram'],
            ['state_code'=>16,'state_name'=>'Tripura'],
            ['state_code'=>17,'state_name'=>'Meghalaya'],
            ['state_code'=>18,'state_name'=>'Assam'],
            ['state_code'=>19,'state_name'=>'West Bengal'],
            ['state_code'=>20,'state_name'=>'Jharkhand'],
            ['state_code'=>21,'state_name'=>'Odisha (Formerly Orissa'],
            ['state_code'=>22,'state_name'=>'Chhattisgarh'],
            ['state_code'=>23,'state_name'=>'Madhya Pradesh'],
            ['state_code'=>24,'state_name'=>'Gujarat'],
            ['state_code'=>25,'state_name'=>'Daman & Diu'],
            ['state_code'=>26,'state_name'=>'Dadra & Nagar Haveli'],
            ['state_code'=>27,'state_name'=>'Maharashtra'],
            ['state_code'=>28,'state_name'=>'Andhra Pradesh'],
            ['state_code'=>29,'state_name'=>'Karnataka'],
            ['state_code'=>30,'state_name'=>'Goa'],
            ['state_code'=>31,'state_name'=>'Lakshdweep'],
            ['state_code'=>32,'state_name'=>'Kerala'],
            ['state_code'=>33,'state_name'=>'Tamil Nadu'],
            ['state_code'=>34,'state_name'=>'Pondicherry'],
            ['state_code'=>35,'state_name'=>'Andaman & Nicobar Islands'],
            ['state_code'=>36,'state_name'=>'Telangana']
        ]);

        VoucherType::insert([
            ['voucher_type_name'=>'Sales Voucher'],              //1
            ['voucher_type_name'=>'Purchase Voucher'],           //2
            ['voucher_type_name'=>'Payment Voucher'],            //3
            ['voucher_type_name'=>'Receipt Voucher'],            //4
            ['voucher_type_name'=>'Contra Voucher'],             //5
            ['voucher_type_name'=>'Journal Voucher'],            //6
            ['voucher_type_name'=>'Credit Note Voucher'],        //7
            ['voucher_type_name'=>'Debit Note Voucher']          //8
        ]);

        ExtraItem::insert([
            ['item_name' => 'Rounded off'],
            ['item_name' => 'Discount allowed'],
            ['item_name' => 'Loading expenditure'],
            ['item_name' => 'Unloading expenditure']
        ]);

        Ledger::insert([
            //1
            ['ledger_name'=>'Cash in Hand','billing_name'=>'Cash in Hand','ledger_group_id'=>13,'state_id'=>1,'transaction_type_id'=>1,'opening_balance'=>0,'customer_category_id'=>1],
            //2
            ['ledger_name'=>'Bank Account','billing_name'=>'Bank Account','ledger_group_id'=>7,'state_id'=>1,'transaction_type_id'=>1,'opening_balance'=>0,'customer_category_id'=>1],
            //3
            ['ledger_name'=>'Bank Account 1','billing_name'=>'Bank Account 1','ledger_group_id'=>7,'state_id'=>1,'transaction_type_id'=>1,'opening_balance'=>0,'customer_category_id'=>1],
            //4
            ['ledger_name'=>'Bank Account 2','billing_name'=>'Bank Account 2','ledger_group_id'=>7,'state_id'=>1,'transaction_type_id'=>1,'opening_balance'=>0,'customer_category_id'=>1],
            //5
            ['ledger_name'=>'Purchase','billing_name'=>'Purchase','ledger_group_id'=>22,'state_id'=>1,'transaction_type_id'=>1,'opening_balance'=>0,'customer_category_id'=>1],
            //6
            ['ledger_name'=>'Sale','billing_name'=>'Sale','ledger_group_id'=>19,'state_id'=>1,'transaction_type_id'=>2,'opening_balance'=>0,'customer_category_id'=>1],
        ]);

        // product data


        Product::create(['product_name' =>'CH. KOLSI', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1no. RING GLASS', 'description' => '...', 'purchase_unit_id'=>1,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. B.GLASS (L)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PRESS KOLSI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PRESS DHUNOCHI', 'description' => '...', 'purchase_unit_id'=>3,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. RING GLASS', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. B.GLASS (L)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'12NO. GHOONGROO 100/100', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SANAI DHUNOCHI', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO.RING GLASS', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. GHOONGROO 18/18', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. MP C BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BEEDING GAMLA', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. RING GLASS', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'10NO. GHOONGROO 18/18', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. MP C BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 3, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DISCO ', 'description' => '...', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. DISCO GLASS', 'description' => 'JSL', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'12NO. GHOONGROO 25/25', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MUKHOSH', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DISCO GHORA', 'description' => '...', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. DISCO GLASS', 'description' => 'JSL', 'purchase_unit_id'=>1,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'12NO. GHOONGROO 50/50', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. FANCY SALAI LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PRESS GHOTI', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. DISCO GLASS', 'description' => 'JSL', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. GANGA JALI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. FANCY SALAI LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PRESS THILI', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. DISCO GLASS', 'description' => 'JSL', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PUJA THALI SET', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. FANCY SALAI LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P. PUSHPOPOTRO', 'description' => '....', 'purchase_unit_id'=>3,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. PLAIN GLASS', 'description' => 'JSL', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'N10/2L GHOONGROO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. FANCY SALAI LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'T.PUSHPOPOTRO', 'description' => '...', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'2NO. PLAIN GLASS', 'description' => 'JSL', 'purchase_unit_id'=>1,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'K. GASH BATI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'NEW BRASS GOODS', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P. COLD PUSHPOPOTRO', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. PLAIN GLASS', 'description' => 'JSL', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. MB CHONDON BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. BN GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'COLD GAMLA', 'description' => '...', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'JAP PUJA GLASS', 'description' => 'JAP', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'100 GOPAL (L)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. BN GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KUCHO RECAB (SKB)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. PLAIN CHONDON BATI', 'description' => 'JSL', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'200 GOPAL (L)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. BN GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. KUCHO RECAB ', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. PLAIN CHONDON BATI', 'description' => 'JSL', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PALISH GHOTI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PRESS THIL (NOKSHA)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'GASH RECAB', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. PLAIN CHONDON BATI', 'description' => 'JSL', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MIRZAPUR PORATH', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'12NO. SAKDANI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'TN BATA(KO:)', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. BEEDING CHONDON BATI', 'description' => 'JSL', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. H/G GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KO: COPPER NAG TAR', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'TN BATA (RA:)', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. BEEDING CHONDON BATI', 'description' => 'JSL', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'JUG', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'COPPER NAG PIPE SPL', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'TN BATI (KO:)', 'description' => '.....', 'purchase_unit_id'=>2,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. BEEDING CHONDON BATI', 'description' => 'JSL', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. F DHUPIA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SIRINGI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'TN BATI (RA:)', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. BEEDING CHONDON BATI', 'description' => 'JSL', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. F DHUPIA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P. JALDHARI (KO)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KOTCH BATA', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. BEEDING CHONDON BATI', 'description' => 'JSL', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. F DHUPIA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'RPT DHUNOCHI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BELUNCHI', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. DHALA PRODIP', 'description' => 'PATRASAYER', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. F DHUPIA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'FOLDING TRISHUL', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'COLD PLAIN THALA', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. DHALA PRODIP', 'description' => 'PATRASAYER', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. F DHUPIA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'ALUMINIUM HARI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>' KUCHO RECAB(JAP) (KO:)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. DHALA PRODIP', 'description' => 'PATRASAYER', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. F DHUPIA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'AARYAN CO.', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'P. BALTI', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BIG GODOL', 'description' => 'PATRASAYER', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. MB BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. POOJA LOTA (SHEET)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'ONSIK HARI (RA:)', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SMALL GODOL', 'description' => 'PATRASAYER', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'S P NOTH (RA)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. POOJA LOTA (SHEET)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'ONSIK HARI (KO:)', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. TRISHUL (L)', 'description' => 'MBD', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'S PNOTH (KO:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. POOJA LOTA (SHEET)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'CHILUMCHI', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. RKD TRISHUL (W)', 'description' => 'MBD', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P MIHI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. POOJA LOTA (SHEET)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P. KULO', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. TRISHUL (L)', 'description' => 'MBD', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'AI SORA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BRASS GLASS', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHALA CHAMOCH/KHUNTI', 'description' => '.......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. RKD TRISHUL (W)', 'description' => 'MBD', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. AI SORA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SHIPPER BOTTLE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'P.KORTAL', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. TRISHUL (L)', 'description' => 'MBD', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. AI SORA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. DIAMOND TIKALI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHALA BATI', 'description' => '.......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. RKD TRISHUL (W)', 'description' => 'MBD', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. AI SORA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. DIAMOND TIKALI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MB PILSUJ', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. TRISHUL (L)', 'description' => 'MBD', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'250 SO: GLASS', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'C BOGI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MAJAKURI', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'5NO. RKD TRISHUL (L)', 'description' => 'MBD', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'250 SO: GLASS (P)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SADATAMA', 'description' => '..........', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'COPPER PIPE NAG', 'description' => 'JALESWAR', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'100gm BRASLINE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 18, 'hsn_code' => '3405', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MOLUA', 'description' => '.........', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'PINAK', 'description' => 'BNRS', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'GHOONGROO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MANDIR GHONTA (RA:)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'JATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'CHONDONBATI (W)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MANDIR GHONTA (KO:)', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'ROUND TOKRI', 'description' => 'CLASSIC', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. MINA GLASS PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHALA GHORA', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. HACHKA PILSUJ', 'description' => 'CHAKDAH', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'12NO. MINA GLASS PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MOHONPUR/PAULI', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. HACHKA PILSUJ', 'description' => 'CHAKDAH', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. GOL GLASS', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P.KORAI (RA:)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PLAIN MURTI (KO:)', 'description' => 'NABADWIP', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. GOL GLASS', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P.KORAI (KO:)', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'200 GOPAL', 'description' => 'NABADWIP', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. GOL GLASS SPL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P.NOTH', 'description' => '.......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KASAR MIHI THALA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. GOL GLASS SPL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BYNOTH', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DARA 50GM', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. PAKHA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'COLD P.NOTH', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1000ML HM COPPER BOTTLE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'3NO. PAKHA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'NOKSHA PORATH', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. DISCO LAMP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. PAKHA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BANGLA PORATH', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. BINA LAMP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1 M PILSUJ', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'COPPER LOTA (RA:)', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'1NO. KAMAL STAND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. GOLAB PARO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'COPPER LOTA (KO:)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'2NO. KAMAL STAND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. GOLAB PARO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P.SAJI (W)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. KAMAL STAND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'14NO. ND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P.SAJI (L)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. CANDLE STAND (SMALL)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. DHAKA DHUNOCHI (SPL)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'ORIYA SAJI', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. CANDLE STAND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. DHAKA DHUNOCHI (SPL)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PANCHAPATRA', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'1 BATTI CANDLE STAND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. OM GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SHEET AACHMONI', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'2 BATTI CANDLE STAND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KAGMARI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHALA AACHMONI', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'8NO. JAR PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. SP DEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'COPPER NAG TAR', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'10NO. KASHMIRI PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. SP DEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BRASS NAG', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'9NO. KASHMIRI PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. SP DEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHALA TRISHUL', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. KASHMIRI PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. SP DEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'HOMKUNDU (L)', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'10NO. GLASS PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. SP DEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'HOMKUNDU (W)', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'9NO. GLASS PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. PARODEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PRESS GLASS (RA:)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DARPAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. FANCY LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PRESS GLASS (KO:)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. KALOGHOTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. BRASS HANDLE DHUPIA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'JHORA THALA (RA:)', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. KALOGHOTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);

        Product::create(['product_name' =>'2NO. BRASS HANDLE DHUPIA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'JHORA THALA (KO:)', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. KALOGHOTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. BRASS HANDLE DHUPIA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. BASH RECAB', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SP EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6LTR. COPPER TANK', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'1NO. NOKSHA DISH', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MSP EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'NUT AAMPATA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHALA SINGASHON (RA:)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BANGLA BATI (W)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHALA SINGASHON (KO:)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. MB CHONDON BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P.KASOR', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. SAKDANI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. MB CHONDON BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHOLER KASOR', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. SAKDANI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. CHAMACH AARTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'CHONDONPUR KASOR', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. SAKDANI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. TRISHUL (L)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'CH. SORA (RA:)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. SAKDANI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'ANTIQUE', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'CH. SORA (KO:)', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. SAKDANI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SADHU BALTI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PIPE TRISHUL ', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. SAKDANI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHAKAI HARI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'T. COLD PUSHPOPOTRO', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'1NO. 2IN1', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MATHAR TOPIA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'AMBOSE CHIRAG', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. 2IN1', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'COPPER PLATE', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'TOPIA', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. 2IN1', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. PAKHA (W)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'APPLE HANDI', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'4NO. 2IN1', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. PAKHA (W)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BENARAS GHONTA', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. ANKUR S/S COPPER JUG', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'4NO. PAKHA (W)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'HATH GHONTA', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. ANKUR COPPER JUG', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'SWASTIK SAJI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PUJA GLASS (W)', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. CLASSIC S/S COPPER JUG', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'1NO. NOUKA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'JAGPRODIP', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. SAGA S/S COPPER JUG', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'2NO. NOUKA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KOSHPRODIP (RA:)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. OM GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. NOUKA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KOSHPRODIP (KO:)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. OM GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. NOUKA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'OM/SWASTIK', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. OM GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. NOUKA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHALA DHUNOCHI/P.PRADIP', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. OM GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '741819221', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. POOJA LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PETA CHAMOCH/KHUNTI', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'9NO. OM GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SANKHA PILSUJ', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'COPPER GLASS', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'10NO. OM GOBLAIT', 'description' => '    ', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. CHIRAG', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'COPPER GLASS (BNRS)', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'2NO. STAR GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. CHIRAG', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'CHITTO BATI', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. STAR GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. CHIRAG', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'ANONODO KOSHA', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'4NO. STAR GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BRASS PLATE', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'TN BATI (PIECE)', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KASAR NOTH (KO:)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'40NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'COLD SORA', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SMALL POWDER POT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'11NO. GHOONGROO 100/100', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SET SINGASHON', 'description' => '.........', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BIG POWDER POT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. DOL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'NABADWIP SINGASHON', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. DIAMOND LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHALA KORTAL', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PETA KORTAL', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. DIAMOND LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'AGARDAN (W)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHALA PAULI', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'9NO. KUBERDEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'41NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MB BODNA', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. KUBERDEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'42NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PALISH EKDIP', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. KUBERDEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'43NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KUMKUM LOTA', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'000NO. KUBERDEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'44NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'COPPER PARSY LOTA', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'2NO. KUBERDEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'ORIYA SAJI POLISH', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BRASS PARSY LOTA', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NOS. KUBERDEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'OSTRO', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'FANCY SILVER LOTA', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'CHACHER MURTI (RA:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PRESS ONSIK HARI (RA:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MB GLASS', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'CHACHER MURTI (KO:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PRESS ONSIK HARI (KO:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MB QUARTER GLASS', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PLAIN MURTI (RA:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KULKULI GLASS (W)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'AAMPATA', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KALI MURTI (P)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SPL MAYUR PILSUJ', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MANDIR KALASH', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KALI MURTI (W)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHAKAI HARI (KO:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SIMLEY PAULI', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'N11/2L GHOONGROO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. RING EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHALA JUG (RA:)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'N11/3L GHOONGROO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. RING EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHALA JUG (KO:)', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'N12/2L GHOONGROO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. RING EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DEVIGHOT (RA:)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'N12/3L GHOONGROO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. RING EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DEVIGHOT (KO:)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'N10/3L GHOONGROO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. RING EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DEVIGHOT (DO: KO:)', 'description' => '.....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'KASAR NOTH (RA:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'CANDLE STAND (W)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PAT JUG', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KASAR BOGI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. 2IN1', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MB SHER', 'description' => '......', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'18NO. PIPE TRISHUL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. 2IN1', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. BANGLA GLASS (CH)', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'28NO. PIPE TRISHUL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'CH. KOLSI SPL', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. BANGLA GLASS (SPL)', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'15NO. PIPE TRISHUL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'CH. KOLSI SPL(KO:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. BANGLA GLASS (CH)', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. PIPE TRISHUL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'TANK(W)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'4NO. BANGLA GLASS (SPL)', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'22NO. PIPE TRISHUL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'14LTR. COPPER TANK', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. BANGLA GLASS (CH)', 'description' => '.....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'12 NO. PIPE TRISHUL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'12LTR. COPPER TANK', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. BANGLA GLASS (SPL)', 'description' => '.....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. PIPE TRISHUL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DOL (W)', 'description' => '    ', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. BANGLA GLASS (150G)', 'description' => '.....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DESSERT SPOON', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SILVER BATI/GLASS', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. BANGLA GLASS (200G)', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BABY SPOON', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'M. SORA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. BANGLA GLASS', 'description' => '.....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'TEA SPOON', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'22NO. TIRKATHI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. POOJA LOTA', 'description' => '.....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO.ONSIK HARI ', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'24NO. TIRKATHI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. POOJA LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. ONSIK HARI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. KULO(P)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. POOJA LOTA', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. ONSIK HARI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. P. KULO(P)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. POOJA LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. ONSIK HARI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. P.KULO(P)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. POOJA LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. ONSIK HARI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. KERALA FANCY ', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. POOJA LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. ONSIK HARI', 'description' => '    ', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. POONA DEVI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. POOJA LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. ONSIK HARI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. SP DEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. POOJA LOTA', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BOKNA HARI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. BOMBAY ARTI(WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. MB LOTA', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. HACHKA KOLSI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BOROSIL GOBLAIT M', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. MB LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. HACHKA KOLSI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BOROSIL GOBLAIT B', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. MB LOTA', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. HACHKA KOLSI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. DIAMOND TIKALII', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. MB LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. HACHKA KOLSI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. DIAMOND TIKALI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. MB LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. HACHKA KOLSI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. BANGLA GLASS (L)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. MB LOTA', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. HACHKA KOLSI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. BANGLA GLASS (L)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. MB LOTA', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. HACHKA KOLSI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'16NO. KHARA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. FANCY LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. HACHKA KOLSI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. KDL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. FANCY LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. KAMAL PARO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PRESS DISCO', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. FANCY LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. KAMAL PARO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. GOLAB NAND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. FANCY LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. KAMAL PARO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. GOLAB NAND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. FANCY LOTA', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. KAMAL PARO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. GOLAB NAND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. COPPER JUG', 'description' => '.....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'0NO. KAMAL PARO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. KAMAL STAND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. COPPER JUG', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'1NO. MB CHONDON BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P. COLD PUSHPOPOTRO 28', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. ANKUR S/S COPPER JUG', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'2NO. MB CHONDON BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. KULO(P)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. TERA S/S COPPER JUG', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'3NO. MB CHONDON BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. PORI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. LA COPPER JUG', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'GLASS PHOOLDAN (W)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. PORI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. LA COPPER JUG', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'00NO. DHUPIA (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PRESS DABOR', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. SPL COPPER JUG', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'0NO. DHUPIA (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'POOJA PLATE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4LTR. COPPER TANK', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'1NO. DHUPIA (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. S.POT PLD', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8LTR. COPPER TANK', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'2NO. DHUPIA (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. S.POT PLD', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SAGA TANKI 12LTR', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'3NO. DHUPIA (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. S.POT PLD', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. BRASS LOTA ', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. DHUPIA (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. S.POT PLD', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. BRASS LOTA', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. DHUPIA (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. S.POT A/S', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. BRASS LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. DHUPIA (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. S.POT A/S', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. BRASS LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. DHUPIA (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. S.POT A/S', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. BRASS LOTA', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. DHUPIA (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. SALAI LOTA (C)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'9NO. BRASS LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. BOMBAY ARTI (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. SALAI LOTA (C)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'10NO. BRASS LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. BOMBAY ARTI (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. SALAI LOTA (C)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. COPPER LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'3NO. BOMBAY ARTI (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. SALAI LOTA (C)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. COPPER LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'4NO. BOMBAY ARTI (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. GANGA JALI (SPL)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. COPPER LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'5NO. BOMBAY ARTI (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4.5NO. GANGA JALI (SPL)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. COPPER LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'1NO. BRASS BOMBAY ARTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PRESS GOL HARI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. COPPER LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'2NO. BRASS BOMBAY ARTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'15LTR. COPPER TANK', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'9NO. COPPER LOTA', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'3NO. BRASS BOMBAY ARTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PRESS KOSAKUSI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'10NO. COPPER LOTA', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'4NO. BRASS BOMBAY ARTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'copper jug kg', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'ROCKET', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. BRASS BOMBAY ARTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'UNIQUE BOTTLE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'7NO. GANGA JALI', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'28NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DIAMOND BOTTLE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'6NO. GANGA JALI', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'15NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'HACHKA SINGASHON', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. GANGA JALI', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'14NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'HAPACHI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4 1/2. GANGA JALI', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'13NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'J CHONDON BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. GANGA JALI', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'10NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BR BESNI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'10NO. GANGA JALI', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'16NO.AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'ALIGENT BOTTLE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'0NO. DAB', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'RUBY BOTTLE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'01NO. DAB', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. DEVDAS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'02NO. DAB', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'17NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. DEVDAS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'03NO. DAB', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'18 NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. MB C BATI PLAIN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. DAB', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. MB C BATI PLAIN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. DAB', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. MB C BATI PLAIN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. DAB', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. MB C BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. DAB', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. CLR GOBLAIT LIGHT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. DAB', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. CLR GOBLAIT LIGHT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. DAB', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'11NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'TRISHUL (KG) SMALL', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. DAB', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'12NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. DEVDAS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. DAB', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'9NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'cold porath', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'9NO. DAB', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'19NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. COPPER DEVIGHOT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'10NO. DAB', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'20NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. DEVDAS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. DISCO LAMP', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NOS. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KACHUA PLATE', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'900ML COPPER BOTTLE (JOINT)', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'21NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KACHUA SADA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'900ML COPPER BOTTLE (JOINTLESS)', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'23NO.AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. KACHUA PLATE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1000ML COPPER BOTTLE', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'22NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. KACHUA PLATE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1200ML COPPER BOTTLE', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'24NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. KACHUA PLATE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'650ML COPPER BOTTLE', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'14NOS. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. KACHUA PLATE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. KDL', 'description' => '....', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NOS. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. KACHUA SADA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. KDL', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'26NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. KACHUA SADA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. KDL', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'27NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. KACHUA SADA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. KDL', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'27NOS. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. KACHUA SADA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'FANCY PILSUJ', 'description' => '...', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SIMLEY GAMLA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PSP 50GM', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '17', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. GOLAB PASS', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BANGLA HARI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PSP 100GM', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 18, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'9NO. GOLAB PASS', 'description' => '...', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'TAMAR KOLSI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'PUJA SET', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MB MOHONPUR', 'description' => '....', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. NAKALI GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. PAKHA (L)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. HACHKA KOLSI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418191', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. KPS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PAN GAMLA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. KPS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SITARI LOTA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. KPS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. ROSE PYALI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. GOLAB PARO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. ROSE PIYALI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. GOLAB PARO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. ROSE PIYALI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. DEVDAS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. GANGA JALI SPL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. DEVDAS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. SILVER GANGA JALI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DARA 100GM', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. SILVER GANGA JALI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'APPLE SINDOOR DIBBI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'GANGA JALI (W)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. STAR GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PUNJABI KADA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'12NO. GLASS PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PICHKARI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BELPATA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'OM PANCHAPRADIP', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. KHARA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHALA NAG SPL', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. KHARA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'LUXURY COPPER JUG', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'2NO. KHARA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. PLD', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. KHARA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. MB BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'50GM BRASSLINE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. FANCY DHUPIA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. FANCY DHUPIA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'00NO. PARODEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. PARODEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. PARODEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MANN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. SINDOOR DIBI MATKI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PRAGI LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'LIGHT KUPI (P)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. MB BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MB BATI (W)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'CHACHA BATI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. NAKALI GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. CANDLE STAND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. KUBERDEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'10NO. ND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'12NO. ND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'11NO. ND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. ND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'17NO. ND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'18NO. ND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'19NO. ND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'13NO. ND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DIYA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'00NO. PANCHAPATRA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'0NO. PANCHAPATRA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'1NO. PANCHAPATRA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'2NO. PANCHAPATRA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'8NO. GHOONGROO 25/25', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. GHOONGROO 50/50', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. PARODEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'31NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'JHARPRODIP (RA:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'JHARPRODIP (KO:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'HAMAL DISTA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. MB BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'20NO. TIRKATHI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'18NO. TIRKATHI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'16NO. TIRKATHI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'14NO. TIRKATHI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'10NO. TIRKATHI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'9NO. JAR PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'10NO. JAR PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. PRODIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. PRODIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. PRODIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418191', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. PRODIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. PRODIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'400 SO: GLASS', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'400 SO: GLASS (P)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SAMSUI GHOTI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. S/S COPPER JUG', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'6NO. S/S COPPER JUG', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'12NO. KASHMIRI PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PITAMBARI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'JOLPRODIP', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'M. THILI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SANTI GHONTA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P. BOGI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P. BOGI (KO:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MAYUR PILSUJ', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'HOM HATHA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'DHALA NAG / TEPAYA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MURTI PANCHAPRADIP', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. PLAIN GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. PLAIN GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHUNOCHI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SLIP PAD', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'JHAPI BATA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'12NO. TIRKATHI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'AMI PILSUJ', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'VANGA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'VANGA PITOL', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'TAMA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'1NO. KHURO GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. KHURO GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. KHURO GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418191', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. KHURO GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. KHURO GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. DISCO GLASS (SB)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. DISCO GLASS (SB)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. DISCO GLASS (SB)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MB PUJA PLATE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BRASS DEVIGHOT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'11NO. GHOONGROO 18/18', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'10NO. GHOONGROO 25/25', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'11NO. GHOONGROO 25/25', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'10NO. GHOONGROO 50/50', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'11NO. GHOONGROO 50/50', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P. COLD PORATH', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. COPPER DEVIGHOT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'2NO. COPPER DEVIGHOT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'HSP EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. DHALA PRODIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'200 SO: GLASS', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'200 SO: GLASS (P)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. GODOL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. DHUNOCHI (P)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. DHUNOCHI (P)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PURONO KASHA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'NOTUN THALA', 'description' => '', 'purchase_unit_id'=>3,  'sale_unit_id' => 3, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'TAMAR TAT', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'4NO. PLAIN CHONDON BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. PLAIN CHONDON BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'OLD KASA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BACHA PITOL', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DHALA PITOL', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BASON TAMA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'RED TAMA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'DORO KOLSI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'300 SO: GLASS', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'300 SO: GLASS (P)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KASAR JHOMPO', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. JAR PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. ITARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. ITARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'18.NO BODNA (MB)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'20NO. BODNA (MB)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'24NO. BODNA (MB)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'10NO. BRASS JAR PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'COPPER LOTA PIECE', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'E J TAMA ', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>2]);
        Product::create(['product_name' =>'radioatar', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '74181921', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P. NOTH (KO:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KUBERDEEP (W)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DESIGN COPPER BOTTLE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'2NO. BASH RECAB', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. BASH RECAB (KO:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'TEPAYA (KO:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. NAKALI GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. NAKALI GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. DHUNOCHI (T)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. DHUNOCHI (T)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'22NO. BODNA (MB)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. CHANTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. CHANTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. CHANTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. AAMPATA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. AAMPATA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. AAMPATA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. PANCHAPATRA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. PANCHAPATRA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. PANCHAPATRA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DOLNA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KASAR BATI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. JHINUK', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. JHINUK', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. KULKULI GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. KULKULI GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. PILSUJ (P)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'10NO. PILSUJ (P)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'12NO. PILSUJ (P)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P. JALDHARI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SILVER LOTA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'HOMKUNDU (L) KO:', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'1NO. HALKA GHOTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. HALKA GHOTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. HALKA GHOTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. MB LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. MB LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. ND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. ND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. ND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. ND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'9NO. ND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. BELPATA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. BELPATA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. BELPATA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. BELPATA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. BELPATA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. KAMAL CRYSTAL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. KAMAL CRYSTAL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. KAMAL CRYSTAL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. DIAMOND MATKI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. DIAMOND MATKI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. DIAMOND MATKI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. DIAMOND PILLAR', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. DIAMOND PILLAR', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. DIAMOND PILLAR', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. DHUNOCHI (T)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'33NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'34NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'35NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SADATAMA (KO:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'36NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'37NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. DIAMOND LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. DIAMOND LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KAJOL LOTA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KHUT', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. OM GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'38NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BRASLINE 100ML', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 18, 'hsn_code' => '3405', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. BRASS BOMBAY ARTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. BRASS BOMBAY ARTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. PARODEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. PARODEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KASHMIRI PHOOLDAN (W)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'CH. DABOR', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'TULSIPATA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. PANPATA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. PANPATA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. PANPATA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. PANPATA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. B. ARTI (WOOD) HV', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. B. ARTI (WOOD) HV', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. MB EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. MB EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. MB EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DURGA EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MINI DURGA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PURNIMA EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. KDL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'TKB TAT', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'JATI (W)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'FLAT PANCHAPRADIP', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. FANCY LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. PLD', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. PLD', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'39NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KOLAPATA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. KASI LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. KASI LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BIG DURGA EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'HAWAN KUND', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'SILVER GLASS/LOTA/BATI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. BASH RECAB (KO:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BELGHORI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'JHOOLA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. JAGANNATH LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'000NO. PARODEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'T AAMPATA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'1NO. NAG AARTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'16NO. ND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. LINE LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. DAN CHABI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. DAN CHABI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. DAN CHABI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. MANDIR DIBI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. MANDIR DIBI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. MANDIR DIBI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. KALOGHOTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. OM GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. OM GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'11NO. OM GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'13NO. OM GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'15NO. OM GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. CHAMACH AARTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. CHAMACH AARTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DESI KALASH (RA:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DESI KALASH (KO:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DESI KALASH (DO: KO:)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. MINI KERALA FANCY', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. MINI KERALA FANCY', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. MINI KERALA FANCY', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. APPLE DEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. APPLE DEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. APPLE DEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. POONA DEVI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'CLR. GLASS GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. MATKI NANDA GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. MATKI NANDA GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO LOTUS GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. LOTUS GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. DIYA BATTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. DIYA BATTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. ODP GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. ODP GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'CHAADMALA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'NOUKA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. NAG SINDOOR DIBI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. MANDIR DIBI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'000NO. PRAGI LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'00NO. PRAGI LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. PRAGI LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. KALYANI LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. LD', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. PAKHA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. PAKHA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. PAKHA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. PAKHA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'9NO. PAKHA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'10NO. PAKHA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. DHAKA DHUNOCHI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. DHAKA DHUNOCHI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. BOMBAY ARTI (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. NAG AARTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. NAG AARTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. NAG AARTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. JAGANNATH LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. DOL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2 1/2NO. DOL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. DOL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1 1/2NO. DOL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SADA GHOTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. BANGLA PORATH', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. DHALA PRODIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. DHALA PRODIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. LINE LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. LINE LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P. SHUP', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. MB KHURA GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. CHANTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. BOMBAY ARTI (WOOD)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '741', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. MB EKDIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'000NO. KUBERDEEP W/S', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'COLD JHORA THALA', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. COPPER DEVIGHOT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'7.5 NO. AGARDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. MB KHURA GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. MB KHURA GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. GOLAB STAND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. GOLAB STAND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'FANCY ARTI (W)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. RICE PAWLY', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'10NO. SAKDANI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. KALYANI LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'14NO. OM GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1500ML COPPER BOTTLE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'1500ML HM COPPER BOTTLE', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'14NO. KHARA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'12NO. KHARA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'10NO. KHARA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. KHARA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. KHARA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'9NO. KHARA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'11NO. KHARA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. DHALA PRODIP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'00NO. KUBERDEEP W/S', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. KUBERDEEP W/S', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'00NO. KUBERDEEP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. KUBERDEEPW/S', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'12NO. OM GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. R.R LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. R.R LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. GANGA JALI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5.5NO. GANGA JALI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. KDL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. KERALA FANCY', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. KERALA FANCY', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. MANGAL ARTY', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. MANGAL ARTY', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KASHMIRI PHOOLDAN MINA (W)', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'SILVER GULI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MB KULKULI GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'D.C KASOR', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3 BATTI CANDLE STAND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5 BATTI CANDLE STAND', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'N8/2L GHOONGROO', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'COLD CHILUMCHI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. BINA LAMP', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PSP 200GM', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 18, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. MB BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. MB BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PLANTER', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'300 GOPAL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '12', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. SINDOOR DIBI MATKI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. SINDOOR DIBI MATKI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'STAND DIYA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'ONO. OM GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'00NO. OM GOBLAIT', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MB HATHA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. NAG AARTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. NAG AARTI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'10NO. MINA GLASS PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'JAIPURI TRAY', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'PAAN DAN', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'P. KAJOL LOTA(P)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'NABADWIP BATI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MANDIR SINGASHON', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BINA FOLDING SPL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DISCO COLLER SPL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DISCO LARGE SPL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. NOKSHA DISH', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. KDL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'9NO. KDL', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'KASAR DHALA BATI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'1NO. PUJA GLASS (C)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'2NO. PUJA GLASS (C)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'3NO. PUJA GLASS (C)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>2]);
        Product::create(['product_name' =>'1NO. RICE PAWLY', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. RICE PAWLY', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. RICE PAWLY', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'9NO. MB LOTA', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'DURGA MURTI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '5306', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. H/G GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. H/G GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. H/G GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'7NO. H/G GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'BOMBAY HARI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'URLY', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'2NO. APPLE SINDOOR DIBBI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'3NO. APPLE SINDOOR DIBBI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. PLAIN CHONDON BATI', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'4NO. B GLASS ', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'5NO. B GLASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'6NO. JAR PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'MB SAJI', 'description' => '', 'purchase_unit_id'=>1,  'sale_unit_id' => 1, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'8NO. GLASS PHOOLDAN', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'10NO. GOLAB PASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'12NO. GOLAB PASS', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'COLD NOKSHA DISH', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);
        Product::create(['product_name' =>'0NO. TRISHUL (L)', 'description' => '', 'purchase_unit_id'=>2,  'sale_unit_id' => 2, 'gst_rate' => 12, 'hsn_code' => '7418', 'product_category_id' =>1]);


    }
}
