//import java.lang.Exception;
 class MyException extends Exception { 
    public MyException() {
        super("This is supr  Exception");
    }
}

  class  check{
	public int first (int n) throws MyException{
		 if(n <= 0) throw new MyException();
		 return n;
	 }
	public int second(int n) throws MyException{
		return first(n);
	}
	public int third(int n) throws MyException{
		 return second(n);
	}

 }
public class checkException {
	   public static void main(String[] args) {
		   check obj = new check();
		   try{
			   System.out.println(obj.third(-1));
		   }
		   catch(MyException e){
			   e.printStackTrace();
		   }
   }
}
