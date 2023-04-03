

class Myexception extends Exception {
	public Myexception(String message){
		super(message);
	}
}

class Checknum{
	public void positive(int num) throws Myexception{
		if(num > 0){
		 	throw new Myexception("it is positive "+num);
		}
	}
	public void zeros(int num) throws Myexception{
		if(num == 0){
		 	throw new Myexception("it is zero "+num);
		}
	}
	public void negative(int num) throws Myexception{
		if(num < 0){
		 	throw new Myexception("it is negative "+num);
		}
	}
}


class Testnum{
	public static void main(String []args){
		Checknum check = new Checknum();
		try{
			check.positive(3);
			check.zeros(0);
			check.negative(-3);
		}catch(Myexception err){
			System.err.println(err);
		}finally{
			System.out.println("Done");
		}
	}
}
