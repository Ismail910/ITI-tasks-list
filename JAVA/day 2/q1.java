import java.util.Random; 

class random{
	public static void main(String args[]){
		int minRandom=Integer.MAX_VALUE,maxRandom=Integer.MIN_VALUE;
		int [] arr=new int [1000];
		 long nano_startTime = System.nanoTime();
		 Random random = new Random();   
		for(int i=0;i<1000;i++){
			arr[i]=random.nextInt(1000); 
			if( arr[i] < minRandom ){
				minRandom = arr[i];
			}
			if( arr[i] > maxRandom ){
				maxRandom = arr[i];
			}
		}
		 long nano_endTime = System.nanoTime();
		System.out.println("min random number"+minRandom);
		System.out.println("max random number"+maxRandom);
		  System.out.println("Time taken in nano seconds: "
                           + (nano_endTime - nano_startTime));
	}
}
