@extends('layout.baseLayout')

@section('content')

<div class="titre">
  <h1>Contactez-nous</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nom</label>
                            <input type="text" class="form-control" id="name" placeholder="Entrez votre nom" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Adresse email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Entrez une adresse email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Sujet</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Selectionnez:</option>
                                <option value="service">Réclamation</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Avis</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Envoyer mon message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
