
class Complex<T extends Number > {
    public T real,img;
	Complex(T r,T i){
		this.real=r;
		this.img=i;
	}
	Complex<T> add(Complex<T> complex){
	
		int real=this.real.intValue()+complex.real.intValue();
		int img=this.img.intValue()+complex.img.intValue();
		Complex <T> result = new Complex<T>((T)new Integer(real),(T) new Integer(img));
		return result;
	}
	Complex<T> sub(Complex<T> complex){
	
		int real=this.real.intValue()-complex.real.intValue();
		int img=this.img.intValue()-complex.img.intValue();
		Complex <T> result = new Complex<T>((T)new Integer(real),(T) new Integer(img));
		return result;
	}
}

class q2{
	public static void main(String []args){
		Complex<Integer> c1 = new Complex<Integer>(5,3);
		Complex<Integer> c2 = new Complex<Integer>(1,1);
		Complex<Integer> c3 = c1.add(c2);
		
		System.out.println("real :"+c3.real +" img:" +c3.img);
	}
}
