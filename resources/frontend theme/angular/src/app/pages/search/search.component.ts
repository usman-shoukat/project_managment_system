import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { FormsModule } from '@angular/forms';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-search',
  templateUrl: './search.component.html',
  styleUrls: ['./search.component.css'],
})
export class SearchComponent implements OnInit {
  services;
  constructor(
    public commonService: CommonServiceService,
    public router: Router
  ) {}
  ngOnInit(): void {
    this.getServices();
  }

  getServices() {
    this.commonService.getServices().subscribe((res) => {
      this.services = res;
    });
  }
}
