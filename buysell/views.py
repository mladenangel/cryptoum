# -*- coding: utf-8 -*-
from __future__ import unicode_literals
from django.contrib.auth.decorators import login_required
from django.shortcuts import render

# Create your views here.



def buy(request):
	user = request.user
	context = {'user': user}
	temlates = 'buysell.html'
	return render(request,temlates,context)	
