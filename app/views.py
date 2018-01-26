from django.shortcuts import render
from django.template import loader
from django.http import HttpResponse
from django.contrib.auth.decorators import login_required

def index(request):
    context = {}
    template = loader.get_template('app/index2.html')
    return HttpResponse(template.render(context, request))

def my(request):
    context = {}
    load_template = request.path.split('/')[-1]
    template = loader.get_template('app/' + load_template)
    return HttpResponse(template.render(context, request))

