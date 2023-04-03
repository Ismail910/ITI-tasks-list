//1)
//db.employee.aggregate([
//{$lookup:{
//        from:"department",
//        localField:"department_id",
//        foreignField:"department_id",
//        as:"dObject"
//         }//lookup
//      },//stage
//   {$project:{full_name:1,dep_name:"$dObject.department_description",_id:0}} 
//   ])



//2

//db.employee.find({position_title:"VP Country Manager" },{full_name:1, salary:1});



//3

db.customer.aggregate([
{$lookup:{
        from:"region",
        localField:"address.customer_region_id",
        foreignField:"region_id",
        as:"regionID"
         }
      },
     
   {$project:{ fullName:{$concat:["$fname"," ","$lname"]},regionID:"$regionID.sales_region"}} 
   ])
   
   
   
   
 //4

  // db.product.find({brand_name:"Washington"},{})
‏