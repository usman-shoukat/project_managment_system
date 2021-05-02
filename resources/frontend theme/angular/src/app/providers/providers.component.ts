import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { Event, NavigationStart, Router } from '@angular/router';
import { CommonServiceService } from '../common-service.service';
import { Location } from '@angular/common';

@Component({
  selector: 'app-providers',
  templateUrl: './providers.component.html',
  styleUrls: ['./providers.component.css'],
  encapsulation: ViewEncapsulation.None,
})
export class ProvidersComponent implements OnInit {
  splitVal;
  url;
  base;
  page;
  doctorSidebar: boolean = true;
  constructor(
    private router: Router,
    public commonService: CommonServiceService,
    location: Location
  ) {}

  ngOnInit(): void {}
}
