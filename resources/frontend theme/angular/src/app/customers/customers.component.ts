import { Component, OnInit } from '@angular/core';
import { Event, NavigationStart, Router } from '@angular/router';
import { Location } from '@angular/common';
import { CommonServiceService } from '../common-service.service';

@Component({
  selector: 'app-customers',
  templateUrl: './customers.component.html',
  styleUrls: ['./customers.component.css'],
})
export class CustomersComponent implements OnInit {
  splitVal;
  base;
  page;
  patientSidebar: boolean = true;
  constructor(
    private router: Router,
    public commonService: CommonServiceService,
    location: Location
  ) {}

  ngOnInit(): void {}
}
