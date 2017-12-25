<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col l4 s12">
                <h5 class="white-text">{{ config('app.name') }}</h5>
                <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


            </div>
            <div class="col l6 m6 s12 offset-l2">
                
                <h5 class="white-text">Register to our newsletter</h5>

                
                {!! Form::open() !!}
                    <div class="input-field">
                        {{ Form::label('enter your email address') }}
                        {{ Form::text('newsletter') }}
                    </div>

                    {{ Form::submit('Send', ['class' => 'btn teal']) }}
                {!! Form::close() !!}
                    
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            Made by <a class="black-text flow-text" href="#">tComp</a>
            and programmer is <a href="#" class="black-text flow-text">Muco Tresor</a>
        </div>
    </div>
</footer>