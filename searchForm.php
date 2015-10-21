<h1 class="h1">Форма  поиска заголовков страниц</h1>
<form role="form" method="post">
    <div class="row">
        <div class=" form-group">

            <h2 class="col-sm-6 h2">Шаблон url(/folder/page)</h2>
        </div>
        <div class="form-group">
            <h2 class="col-sm-6 h2">Title страницы</h2>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <input type="text" class="form-control" placeholder="/" name="searchText">
        </div>
        <div class="form-group col-sm-6">
            <input type="text" class="form-control" placeholder="Заголовок всего сайта" name="result" readonly="readonly">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <input type="text" class="form-control" placeholder="/companies" name="searchTextSecond">
        </div>
        <div class="form-group col-sm-6">
            <input type="text" class="form-control" placeholder="Заголовок страницы со списком компаний" name="resultSecond" readonly="readonly">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <input type="text" class="form-control" placeholder="/companies/company1" name="searchTextThird">
        </div>
        <div class="form-group col-sm-6">
            <input type="text" class="form-control" placeholder="Заголовок страницы 1 - ой компании" name="resultThird" readonly="readonly">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <input type="text" class="form-control" placeholder="/companies/company1?product1" name="searchTextFouth">
        </div>
        <div class="form-group col-sm-6">
            <input type="text" class="form-control" placeholder="Заголовок страницы 1 - ой компании c открытым первым товаром" name="resultFouth" readonly="readonly">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-12">
            <input type="text" class="form-control" name="searchUrl">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-12">
            <input type="submit" value="Обновить" class="btn btn-success">
        </div>
    </div>
</form>