import java.util.function.Function;
 class Task3{
    
    private  Double array[]= new Double[3];
    public Task3(Double [] arr){
       this.array = arr;
    }
	
    public  Function<Double[],Double> calc = (array)-> (array[1] * array[1])-(4 * array[0] * array[2]);

    
    
}
 class Task2{
    public static void main(String args[]){
    	 Double array[]= new Double[]{1.0,-5.0,6.0};
        Task3 t = new Task3(array);

	 Double number = t.calc.apply(array);
        Double det = det = array[1] * array[1] - 4 * array[0] * array[2];
        if (number > 0){
            System.out.println("first root : " + (-array[1] + Math.sqrt(det)) / (2 * array[0]));
            System.out.println("second root : " + (-array[1] - Math.sqrt(det)) / (2 * array[0]));
        }else if (number == 0){
            System.out.println("the root is : " + (array[1] / (2 * array[0])));
        }else{
            System.out.println("no");
        }
    }
}
