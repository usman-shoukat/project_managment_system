import { Component, OnInit } from '@angular/core';
import { CommonServiceService } from './../../common-service.service';

@Component({
  selector: 'app-reviews',
  templateUrl: './reviews.component.html',
  styleUrls: ['./reviews.component.css'],
})
export class ReviewsComponent implements OnInit {
  reviews;
  constructor(public commonService: CommonServiceService) {}

  ngOnInit(): void {
    this.getReviews();
  }

  getReviews() {
    this.commonService.getReviews().subscribe((res) => {
      this.reviews = res;
    });
  }
}
