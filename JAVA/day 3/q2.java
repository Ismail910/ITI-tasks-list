import java.util.function.Function;

class roots{
    public static void main(String args[]){
        Double array[]= new Double[]{1.0,-5.0,6.0};
        Function<Double[],Double> calc = (arr)-> (arr[1] * arr[1])-(4 * arr[0] * arr[2]);
       
        Double number = calc.apply(array);
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
