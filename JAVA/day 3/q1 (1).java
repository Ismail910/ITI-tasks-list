import java.util.function.Function;
class Fahrenheit{
	public static void main(String []args){
		Function<Integer,Double> Fahrenheit= celsius -> (celsius * 1.8)	+ 32;
		System.out.println(Fahrenheit.apply(0));
	}
}
