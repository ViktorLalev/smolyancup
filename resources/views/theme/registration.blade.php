@extends("master")

@section('title','Регистрация')

@section('content')
       <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                	<p></p>
                    <h1>Регистрирайте се за участие в Smolyan Cup</h1>
                    <p>Записването на отбори ще бъде отворено до 12:00 часа на 18 септември 2015г. (петък)</p>
               
                </div>
                
            </div>
        </div>
    </section><!--/#title-->        
       <div class="container">
            <div class="row"> 
                   <div class="col-md-6">
                    <h2>Регистрация</h2>
                    @include('theme.partial.formRegistration')
                	</div>
                	<div class="col-md-6">
                    <h2>Помощ</h2>
                    <ul class="faq unstyled">
                    	<li>
                    		<span class="number">01</span>
                    		<div>
                    		<p>В полето "Име на отбор" попълнете желаното от вас име.
                    			<br /><i>Пример: Smolyan Cup Team</i></p>
                    		</div>
                    	</li>
                    	
                    	<li>
                    		<span class="number">02</span>
                    		<div>
                    		<p>В полето "E-mail" попълнете коректен е-mail за връзка
                    			<br /><i>Пример: capitan@smolyancupteam.com</i>
                    			
                    		</p>
                    		</div>
                    	</li>
                    	<li>
                    		<span class="number">03</span>
                    		<div>
                    		<p>В полето "Телефон" попълнете коректен телефонен номер за връзка
                    			<br />
                    			
                    		</p>
                    		</div>
                    	</li>
                    	<br/>
                    	 <hr/>
                    	 <li>
                    		<span class="number">04</span>
                    		<div>
                    		<p>В полето "Играч" попълнете коректен Името на един играч от отбора ви
                    			<br />
                    			
                    		</p>
                    		</div>
                    	</li>
                    	<br />
                    	<li>
                    		<span class="number">05</span>
                    		<div>
                    		<p>За да въведете още играчи, натиснете  бутова "Добави играч".
                    			<br />
                    			
                    		</p>
                    		</div>
                    	</li>
                        <br />
                        <li>
                            <span class="number">06</span>
                            <div>
                            <p>След като сте въвели всички полета, натиснете бутона "Регистрирай".
                                <br />
                                
                            </p>
                            </div>
                        </li>

                    </ul>
                    
                	</div>
                   
            </div>
            <hr />
            
       </div>
@stop
